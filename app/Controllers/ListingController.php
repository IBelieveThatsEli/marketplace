<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\ListingImageModel;
use App\Models\ListingModel;
use App\Models\OrderModel;

class ListingController extends BaseController
{
    public function index()
    {
        if (! session('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $listingModel  = new ListingModel();
        $categoryModel = new CategoryModel();
        $listingImageModel = new ListingImageModel();

        $sellerId = (int) session('user_id');

        $listings = $listingModel
            ->select('listings.*, categories.name AS category_name')
            ->join('categories', 'categories.id = listings.category_id', 'left')
            ->where('seller_id', $sellerId)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        $stats = [
            'total'   => count($listings),
            'active'  => count(array_filter($listings, fn ($item) => $item['status'] === 'active')),
            'sold'    => count(array_filter($listings, fn ($item) => $item['status'] === 'sold')),
            'paused'  => count(array_filter($listings, fn ($item) => $item['status'] === 'paused')),
            'removed' => count(array_filter($listings, fn ($item) => $item['status'] === 'removed')),
        ];

        foreach ($listings as &$listing) {
            $listing['images'] = $listingImageModel
                ->where('listing_id', $listing['id'])
                ->orderBy('sort_order', 'ASC')
                ->findAll();
        }

        return view('mylistings', [
            'listings'   => $listings,
            'categories' => $categoryModel->orderBy('name', 'ASC')->findAll(),
            'stats'      => $stats,
        ]);
    }

    public function store()
    {
        if (! session('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $rules = [
            'category_id' => 'permit_empty|is_natural_no_zero',
            'title'       => 'required|min_length[3]|max_length[150]',
            'description' => 'permit_empty|max_length[5000]',
            'price'       => 'required|decimal|greater_than[0]',
            'status'      => 'required|in_list[active,paused,removed]',
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $listingModel = new ListingModel();
        $listingImageModel = new ListingImageModel();

        $listingId = $listingModel->insert([
            'seller_id'   => session('user_id'),
            'category_id' => $this->request->getPost('category_id') ?: null,
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'price'       => $this->request->getPost('price'),
            'status'      => $this->request->getPost('status'),
        ], true);

        $images = $this->request->getFileMultiple('images');

        if (! empty($images)) {
            $year = date('Y');
            $uploadPath = WRITEPATH . 'uploads/listings/' . $year;
            if (! is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $sortOrder = 0;
            foreach ($images as $image) {
                if ($image && $image->isValid() && ! $image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $image->move($uploadPath, $newName);

                    $listingImageModel->insert([
                        'listing_id' => $listingId,
                        'image_url'  => 'uploads/listings/' . $year . '/' . $newName,
                        'sort_order' => $sortOrder,
                    ]);

                    $sortOrder++;
                }
            }
        }

        return redirect()
            ->to('/mylistings')
            ->with('success', 'Product listing created successfully.');
    }

    public function updateStatus(int $id)
    {
        if (! session('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $status = $this->request->getPost('status');
        if (! in_array($status, ['active', 'paused'], true)) {
            return redirect()->to('/mylistings')->with('error', 'Invalid listing status.');
        }

        $listingModel = new ListingModel();
        $listing = $listingModel
            ->where('id', $id)
            ->where('seller_id', (int) session('user_id'))
            ->first();

        if (! $listing) {
            return redirect()->to('/mylistings')->with('error', 'Listing not found.');
        }

        if (! $listingModel->skipValidation(true)->update($id, ['status' => $status])) {
            return redirect()
                ->to('/mylistings')
                ->with('error', 'Listing status could not be updated.');
        }

        return redirect()
            ->to('/mylistings')
            ->with('success', 'Listing status updated.');
    }

    public function delete(int $id)
    {
        if (! session('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $listingModel = new ListingModel();
        $listingImageModel = new ListingImageModel();
        $orderModel = new OrderModel();

        $listing = $listingModel
            ->where('id', $id)
            ->where('seller_id', (int) session('user_id'))
            ->first();

        if (! $listing) {
            return redirect()->to('/mylistings')->with('error', 'Listing not found.');
        }

        $images = $listingImageModel->where('listing_id', $id)->findAll();

        $db = db_connect();
        $db->transStart();

        if (! empty($images)) {
            $listingImageModel->where('listing_id', $id)->delete();
        }

        $orderModel->where('listing_id', $id)->delete();
        $listingModel->delete($id);

        $db->transComplete();

        if (! $db->transStatus()) {
            return redirect()
                ->to('/mylistings')
                ->with('error', 'Listing could not be deleted.');
        }

        foreach ($images as $image) {
            $this->deleteListingImageFile($image['image_url']);
        }

        return redirect()
            ->to('/mylistings')
            ->with('success', 'Listing deleted.');
    }

    private function deleteListingImageFile(string $imageUrl): void
    {
        $relativePath = trim(str_replace(['\\', '../'], ['/', ''], $imageUrl), '/');

        if (! str_starts_with($relativePath, 'uploads/listings/')) {
            return;
        }

        $uploadsRoot = realpath(WRITEPATH . 'uploads/listings');
        $imagePath = realpath(WRITEPATH . $relativePath);

        if ($uploadsRoot === false || $imagePath === false || ! str_starts_with($imagePath, $uploadsRoot . DIRECTORY_SEPARATOR)) {
            return;
        }

        if (is_file($imagePath)) {
            unlink($imagePath);
        }
    }
}

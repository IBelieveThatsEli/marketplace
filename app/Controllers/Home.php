<?php

namespace App\Controllers;

use App\Models\ListingImageModel;
use App\Models\ListingModel;
use App\Models\OrderModel;
use App\Models\WalletTransactionModel;

class Home extends BaseController
{
    public function index(): string
    {
        $listingModel = new ListingModel();
        $listingImageModel = new ListingImageModel();
        $search = trim((string) $this->request->getGet('q'));

        $listingQuery = $listingModel
            ->select('listings.*, users.name AS seller_name, categories.name AS category_name')
            ->join('users', 'users.id = listings.seller_id')
            ->join('categories', 'categories.id = listings.category_id', 'left')
            ->where('listings.status', 'active');

        if ($search !== '') {
            $listingQuery
                ->groupStart()
                    ->like('listings.title', $search)
                    ->orLike('listings.description', $search)
                    ->orLike('categories.name', $search)
                    ->orLike('users.name', $search)
                ->groupEnd();
        }

        $listings = $listingQuery
            ->orderBy('listings.created_at', 'DESC')
            ->findAll();

        foreach ($listings as &$listing) {
            $listing['first_image'] = $listingImageModel
                ->where('listing_id', $listing['id'])
                ->orderBy('sort_order', 'ASC')
                ->first();
        }

        return view('home', [
            'listings' => $listings,
            'search' => $search,
        ]);
    }

    public function purchase(int $id)
    {
        if (! session('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $buyerId = (int) session('user_id');
        $listingModel = new ListingModel();
        $walletModel = new WalletTransactionModel();
        $orderModel = new OrderModel();

        $listing = $listingModel
            ->where('id', $id)
            ->where('status', 'active')
            ->first();

        if (! $listing) {
            return redirect()->to('/')->with('error', 'This listing is no longer available.');
        }

        if ((int) $listing['seller_id'] === $buyerId) {
            return redirect()->to('/')->with('error', 'You cannot purchase your own listing.');
        }

        $price = (float) $listing['price'];
        if ($walletModel->getBalance($buyerId) < $price) {
            return redirect()->to('/profile')->with('error', 'Please add funds to your wallet before purchasing this item.');
        }

        $db = db_connect();
        $db->transStart();

        $amount = number_format($price, 2, '.', '');

        $orderId = $orderModel->skipValidation(true)->insert([
            'buyer_id' => $buyerId,
            'seller_id' => (int) $listing['seller_id'],
            'listing_id' => (int) $listing['id'],
            'amount' => $amount,
            'status' => 'paid',
        ], true);

        $walletModel->skipValidation(true)->insert([
            'user_id' => $buyerId,
            'type' => 'purchase',
            'amount' => '-' . $amount,
            'reference_type' => 'order',
            'reference_id' => $orderId,
            'description' => 'Purchase: ' . $listing['title'],
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        $walletModel->skipValidation(true)->insert([
            'user_id' => (int) $listing['seller_id'],
            'type' => 'sale',
            'amount' => $amount,
            'reference_type' => 'order',
            'reference_id' => $orderId,
            'description' => 'Sale: ' . $listing['title'],
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        $listingModel->skipValidation(true)->update($id, ['status' => 'sold']);

        $db->transComplete();

        if (! $db->transStatus()) {
            return redirect()->to('/')->with('error', 'Purchase could not be completed.');
        }

        return redirect()->to('/')->with('success', 'Purchase completed successfully.');
    }
}

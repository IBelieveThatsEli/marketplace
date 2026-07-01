<?php

namespace App\Models;

use CodeIgniter\Model;

class ListingModel extends Model
{
    protected $table         = 'listings';
    protected $primaryKey    = 'id';
    protected $returnType    = 'array';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'seller_id',
        'category_id',
        'title',
        'description',
        'price',
        'status',
    ];

    protected $validationRules = [
        'seller_id'   => 'required|is_natural_no_zero',
        'category_id' => 'permit_empty|is_natural_no_zero',
        'title'       => 'required|min_length[3]|max_length[150]',
        'description' => 'permit_empty|max_length[5000]',
        'price'       => 'required|decimal|greater_than[0]',
        'status'      => 'permit_empty|in_list[active,sold,paused,removed]',
    ];

    public function activeListings()
    {
        return $this
            ->select('listings.*, users.name AS seller_name, categories.name AS category_name')
            ->join('users', 'users.id = listings.seller_id')
            ->join('categories', 'categories.id = listings.category_id', 'left')
            ->where('listings.status', 'active')
            ->orderBy('listings.created_at', 'DESC');
    }

    public function findActiveListing(int $id): ?array
    {
        return $this
            ->where('id', $id)
            ->where('status', 'active')
            ->first();
    }
}

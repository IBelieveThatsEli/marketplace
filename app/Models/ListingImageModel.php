<?php

namespace App\Models;

use CodeIgniter\Model;

class ListingImageModel extends Model
{
    protected $table      = 'listing_images';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = [
        'listing_id',
        'image_url',
        'sort_order',
    ];

    protected $validationRules = [
        'listing_id' => 'required|is_natural_no_zero',
        'image_url'  => 'required|max_length[500]',
    ];

    public function forListing(int $listingId): array
    {
        return $this
            ->where('listing_id', $listingId)
            ->findAll();
    }
}

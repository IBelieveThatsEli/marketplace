<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
     protected $table         = 'orders';
    protected $primaryKey    = 'id';
    protected $returnType    = 'array';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'buyer_id',
        'seller_id',
        'listing_id',
        'amount',
        'status',
    ];

    protected $validationRules = [
        'buyer_id'   => 'required|is_natural_no_zero',
        'seller_id'  => 'required|is_natural_no_zero',
        'listing_id' => 'required|is_natural_no_zero',
        'amount'     => 'required|decimal|greater_than[0]',
        'status'     => 'permit_empty|in_list[pending,paid,completed,cancelled,refunded]',
    ];

    public function forBuyer(int $buyerId): array
    {
        return $this
            ->select('orders.*, listings.title')
            ->join('listings', 'listings.id = orders.listing_id')
            ->where('orders.buyer_id', $buyerId)
            ->orderBy('orders.created_at', 'DESC')
            ->findAll();
    }

    public function forSeller(int $sellerId): array
    {
        return $this
            ->select('orders.*, listings.title')
            ->join('listings', 'listings.id = orders.listing_id')
            ->where('orders.seller_id', $sellerId)
            ->orderBy('orders.created_at', 'DESC')
            ->findAll();
    }
}

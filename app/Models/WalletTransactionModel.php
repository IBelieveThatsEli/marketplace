<?php

namespace App\Models;

use CodeIgniter\Model;

class WalletTransactionModel extends Model
{
    protected $table      = 'wallet_transactions';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = [
        'user_id',
        'type',
        'amount',
        'reference_type',
        'reference_id',
        'description',
        'created_at',
    ];

    protected $validationRules = [
        'user_id'        => 'required|is_natural_no_zero',
        'type'           => 'required|in_list[deposit,purchase,sale,withdrawal,refund]',
        'amount'         => 'required|decimal',
        'reference_type' => 'permit_empty|in_list[order,payment,manual]',
        'reference_id'   => 'permit_empty|is_natural_no_zero',
        'description'    => 'permit_empty|max_length[255]',
    ];

    public function getBalance(int $userId): float
    {
        $row = $this
            ->select('COALESCE(SUM(amount), 0) AS balance')
            ->where('user_id', $userId)
            ->first();

        return (float) ($row['balance'] ?? 0);
    }

    public function forUser(int $userId): array
    {
        return $this
            ->where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->findAll();
    }
}

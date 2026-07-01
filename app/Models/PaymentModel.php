<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table         = 'payments';
    protected $primaryKey    = 'id';
    protected $returnType    = 'array';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'user_id',
        'gateway',
        'gateway_reference',
        'amount',
        'status',
    ];

    protected $validationRules = [
        'user_id'           => 'required|is_natural_no_zero',
        'gateway'           => 'required|max_length[50]',
        'gateway_reference' => 'permit_empty|max_length[255]',
        'amount'            => 'required|decimal|greater_than[0]',
        'status'            => 'permit_empty|in_list[pending,successful,failed,cancelled]',
    ];

    public function markSuccessful(int $paymentId, ?string $gatewayReference = null): bool
    {
        $data = ['status' => 'successful'];

        if ($gatewayReference !== null) {
            $data['gateway_reference'] = $gatewayReference;
        }

        return $this->update($paymentId, $data);
    }
}

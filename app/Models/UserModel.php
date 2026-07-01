<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $useTimestamps    = true;

    protected $allowedFields    = [
        'name',
        'email',
        'password_hash',
        'role',
        'status',
    ];

    protected $validationRules = [
        'name'          => 'required|min_length[2]|max_length[100]',
        'email'         => 'required|valid_email|max_length[255]|is_unique[users.email,id,{id}]',
        // 'password_hash' => 'required',
        // 'role'          => 'permit_empty|in_list[user,admin]',
        // 'status'        => 'permit_empty|in_list[active,suspended,deleted]',
    ];

    public function findByEmail(string $email): ?array
    {
        return $this->where('email', $email)->first();
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\WalletTransactionModel;

class ProfileController extends BaseController
{
    public function index()
    {
        if (! session('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $userModel = new UserModel();
        $walletModel = new WalletTransactionModel();
        $userId = (int) session('user_id');

        return view('profile', [
            'user' => $userModel->find($userId),
            'walletBalance' => $walletModel->getBalance($userId),
            'walletTransactions' => array_slice($walletModel->forUser($userId), 0, 8),
        ]);
    }

    public function update()
    {
        if (! session('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $userModel = new UserModel();
        $userId = (int) session('user_id');
        $user = $userModel->find($userId);

        if (! $user) {
            return redirect()->to('/login')->with('error', 'Please log in again.');
        }

        $rules = [
            'name' => 'required|min_length[2]|max_length[100]',
            'email' => 'required|valid_email|max_length[255]|is_unique[users.email,id,' . $userId . ']',
        ];

        $newPassword = trim((string) $this->request->getPost('new_password'));
        if ($newPassword !== '') {
            $rules['current_password'] = 'required';
            $rules['new_password'] = 'min_length[8]';
            $rules['confirm_password'] = 'required|matches[new_password]';
        }

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        if ($newPassword !== '' && ! password_verify((string) $this->request->getPost('current_password'), $user['password_hash'])) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Current password is incorrect.');
        }

        $data = [
            'name' => trim((string) $this->request->getPost('name')),
            'email' => trim((string) $this->request->getPost('email')),
        ];

        if ($newPassword !== '') {
            $data['password_hash'] = password_hash($newPassword, PASSWORD_DEFAULT);
        }

        if (! $userModel->skipValidation(true)->update($userId, $data)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $userModel->errors() ?: ['Profile could not be updated.']);
        }

        session()->set([
            'user_name' => $data['name'],
            'user_email' => $data['email'],
        ]);

        return redirect()
            ->to('/profile')
            ->with('success', 'Profile updated successfully.');
    }

    public function deposit()
    {
        if (! session('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        $rules = [
            'amount' => 'required|decimal|greater_than[0]',
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $amount = number_format((float) $this->request->getPost('amount'), 2, '.', '');
        $walletModel = new WalletTransactionModel();

        $walletModel->insert([
            'user_id' => (int) session('user_id'),
            'type' => 'deposit',
            'amount' => $amount,
            'reference_type' => 'manual',
            'description' => 'Wallet top-up',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()
            ->to('/profile')
            ->with('success', 'Funds added to your wallet.');
    }
}

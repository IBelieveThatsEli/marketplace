<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
    {
        return view('auth/register', ['activePage' => 'register']);
    }

    public function store()
    {
        $rules = [
            'name' => [
                'rules' => 'required|min_length[2]|max_length[100]',
                'errors' => [
                    'required' => 'Name is required.',
                    'min_length' => 'Name must be at least 2 characters.',
                ],
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Please enter a valid email address.',
                    'is_unique' => 'This email is already registered.',
                ],
            ],
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Password is required.',
                    'min_length' => 'Password must be at least 8 characters.',
                ],
            ],
            'confirm_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Please confirm your password.',
                    'matches' => 'Passwords do not match.',
                ],
            ],
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $userModel->insert([
            'name'          => $this->request->getPost('name'),
            'email'         => $this->request->getPost('email'),
            'password_hash' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'          => 'user',
        ]);

        return redirect()
            ->to('/login')
            ->with('success', 'Account created. You can now log in.');
    }

    public function login()
    {
        return view('auth/login', ['activePage' => 'login']);
    }

    public function attemptLogin()
    {
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $user = $userModel->findByEmail($this->request->getPost('email'));

        if (! $user) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Invalid email or password.');
        }

        $password = $this->request->getPost('password');

        if (! password_verify($password, $user['password_hash'])) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Invalid email or password.');
        }

        session()->regenerate();

        session()->set([
            'user_id'   => $user['id'],
            'user_name' => $user['name'],
            'user_email'=> $user['email'],
            'user_role' => $user['role'],
            'isLoggedIn'=> true,
        ]);

        return redirect()
            ->to('/')
            ->with('success', 'Logged in successfully.');
    }

    public function logout()
    {
        session()->remove([
            'user_id',
            'user_name',
            'user_email',
            'user_role',
            'isLoggedIn',
        ]);
        session()->setFlashdata('success', 'You have been logged out.');

        return redirect()
            ->to('/login');
    }
}

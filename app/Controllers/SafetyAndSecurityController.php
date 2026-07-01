<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SafetyAndSecurityController extends BaseController
{
    public function index()
    {
        return view('safetyandsecurity', []);
    }
}

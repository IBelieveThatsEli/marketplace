<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HelpCenterController extends BaseController
{
    public function index()
    {
        return view('helpcenter', []);
    }
}

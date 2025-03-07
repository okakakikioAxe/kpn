<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index(): string
    {
        return view('admin/dashboard');
    }

    public function galery(): string
    {
        return view('admin/galery');
    }
}

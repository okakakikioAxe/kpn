<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // $this->cachePage(86400);
        return view('homepage');
    }

    public function aboutUs(): string
    {
        // $this->cachePage(86400);
        return view('welcome_message');
    }
}

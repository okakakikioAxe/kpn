<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // $this->cachePage(86400);
        return view('homepage');
    }

    public function product(): string
    {
        // $this->cachePage(86400);
        return view('product');
    }

    public function contactUs(): string
    {
        // $this->cachePage(86400);
        return view('contact_us');
    }

    public function aboutUs(): string
    {
        // $this->cachePage(86400);
        return view('about_us');
    }
}

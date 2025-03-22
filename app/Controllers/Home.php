<?php

namespace App\Controllers;

use App\Models\Galery;

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

    public function galery(): string
    {
        $galeryModel = new Galery();
        $images = $galeryModel->where('status', 1)->findAll();
        return view('galery', ['images' => $images]);
    }
}

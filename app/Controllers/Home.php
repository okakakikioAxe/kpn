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
    public function index_v3(): string
    {
        // $this->cachePage(86400);
        return view('v2/id/homepage_id');
    }

    public function product(): string
    {
        $db = \Config\Database::connect();

        // Get all products with their variants
        $query = $db->table('products p')
            ->select('p.id, p.title, p.description as description, p.image, p.thumbnail, p.category')
            ->get();

        $products = $query->getResultArray();

        // For each product, get its variants and format them
        foreach ($products as &$product) {
            // Get variants for this product ordered by 'order'
            $variants = $db->table('product_variants')
                ->where('product_id', $product['id'])
                ->orderBy('order', 'ASC')
                ->get()
                ->getResultArray();

            // Extract colors into a separate list
            $colorList = array_column($variants, 'color');

            // Add the formatted data to the product
            $product['color_list'] = $colorList;
            $product['variant_list'] = $variants;
        }

        return view('product', ['products' => $products]);
    }
    public function product_v3(): string
    {
        $db = \Config\Database::connect();

        // Get all products with their variants
        $query = $db->table('products p')
            ->select('p.id, p.slug, p.title, p.thumbnail')
            ->get();

        $products = $query->getResultArray();

        return view('v2/id/product_id', ['products' => $products]);
    }

    public function product_detail_v3($slug): string
    {
        $db = \Config\Database::connect();
        $product =  $db->table('products')->where('slug', $slug)->get()->getRow();
    
        $variants = $db->table('product_variants')
                ->where('product_id', $product->id)
                ->orderBy('order', 'ASC')
                ->get()
                ->getResultArray();
        // // Get all products with their variants
        // $query = $db->table('products p')
        //     ->select('p.id, p.slug, p.title, p.thumbnail')
        //     ->get();

        // $products = $query->getResultArray();

        // return view('v2/id/product_id', ['products' => $products]);
        return view('v2/id/product_detail_id', ['product' => $product, 'variants' => $variants]);
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

    public function aboutUs_v3(): string
    {
        // $this->cachePage(86400);
        return view('v2/id/about_us_id');
    }

    public function contactUs_v3(): string
    {
        // $this->cachePage(86400);
        return view('v2/id/contact_us_id');
    }

    public function galery(): string
    {
        $galeryModel = new Galery();
        $images = $galeryModel->where('status', 1)->findAll();
        return view('galery', ['images' => $images]);
    }
}
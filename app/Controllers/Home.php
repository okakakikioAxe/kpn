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

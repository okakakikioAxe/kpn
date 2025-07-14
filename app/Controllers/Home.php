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

    public function index_v2($lang = 'id'): string
    {

        $supported = ['id', 'en', 'cn'];

        if (!in_array($lang, $supported)) {
            // Optional: fallback or show 404
            return view('v2/id/homepage_id');
        }
        if ($lang == 'en') {
            return view('v2/en/homepage_en');
        } else if ($lang == 'cn') {
            return view('v2/cn/homepage_cn');
        } else {
            return view('v2/id/homepage_id');
        }
        // $this->cachePage(86400);
    }

    public function galery_v2($lang = 'id'): string
    {
        $supported = ['id', 'en', 'cn'];
        $galeryModel = new Galery();
        $galleries = $galeryModel->where('status', 1)->findAll();

        if (!in_array($lang, $supported)) {
            // Optional: fallback or show 404
            return view('v2/id/gallery_id');
        }
        if ($lang == 'en') {
            return view('v2/en/gallery_en', ['galleries' => $galleries]);
        } else if ($lang == 'cn') {
            return view('v2/cn/gallery_cn', ['galleries' => $galleries]);
        } else {
            return view('v2/id/gallery_id', ['galleries' => $galleries]);
        }
    }

    public function product_v2($lang = 'id'): string
    {
        $supported = ['id', 'en', 'cn'];
        $db = \Config\Database::connect();

        // Get all products with their variants
        $query = $db->table('products p')
            ->where('p.status', 1)
            ->select('p.id, p.slug, p.title, p.thumbnail')
            ->get();

        $products = $query->getResultArray();

        if (!in_array($lang, $supported)) {
            // Optional: fallback or show 404
            return view('v2/id/product_id');
        }
        if ($lang == 'en') {
            return view('v2/en/product_en', ['products' => $products]);
        } else if ($lang == 'cn') {
            return view('v2/cn/product_cn', ['products' => $products]);
        } else {
            return view('v2/id/product_id', ['products' => $products]);
        }
    }

    public function productList()
    {
        $page = $this->request->getGet('page') ?? 1;
        $keyword = $this->request->getGet('keyword') ?? '';
        $perPage = 10;
        $offset = ($page - 1) * $perPage;

        $db = \Config\Database::connect();
        $builder = $db->table('products')
            ->select('id, slug, title, thumbnail')
            ->like('title', $keyword)
            ->where('status', 1)
            ->orderBy('sort_order', 'ASC');

        $total = $builder->countAllResults(false); // keep query for later
        $products = $builder->limit($perPage, $offset)->get()->getResultArray();

        return $this->response->setJSON([
            'products' => $products,
            'total' => $total,
            'page' => (int) $page,
            'perPage' => $perPage,
            'lastPage' => ceil($total / $perPage)
        ]);
    }

    public function product_detail_v2($slug, $lang = 'id')
    {
        $supported = ['id', 'en', 'cn'];
        $db = \Config\Database::connect();
        $product =  $db->table('products')->where('slug', $slug)->where('status', 1)->get()->getRow();
        if ($product == null) {
            return redirect()->to('/product');
        }
        $variants = $db->table('product_variants')
            ->where('product_id', $product->id)
            ->orderBy('order', 'ASC')
            ->get()
            ->getResultArray();

        $images = $db->table('product_images')
            ->where('product_id', $product->id)
            ->orderBy('sort_order', 'ASC')
            ->get()
            ->getResultArray();

        // get related products
        $products = [];
        $searchPhrase = $product->title;
        $keywords = explode(' ', $searchPhrase);
        $stopwords = ['in', 'on', 'at', 'of', 'the', 'a', 'an', 'and', 'to'];

        $productModel = new \App\Models\Product();
        $builder = $productModel->builder();

        $first = true;
        foreach ($keywords as $word) {
            $word = strtolower(trim($word));

            // Filter: ignore empty, short (< 3), or stopwords
            if ($word === '' || strlen($word) < 3 || in_array($word, $stopwords)) {
                continue;
            }

            if ($first) {
                $builder->like('title', $word);
                $first = false;
            } else {
                $builder->orLike('title', $word);
            }
        }

        $matching = $builder->limit(10)->get()->getResultArray();

        $matchCount = count($matching);
        $limit = 10;

        if ($matchCount < $limit) {
            $remaining = $limit - $matchCount;

            // Ambil produk acak yang tidak cocok
            $random = $productModel
                ->where('title NOT LIKE', '%' . $word . '%')
                ->orderBy('RAND()')
                ->findAll($remaining);

            // Gabungkan hasil
            $products = array_merge($matching, $random);
        } else {
            $products = $matching;
        }
        // $products = $matching;

        // $products = $db->table('products p')
        //     ->where('p.status', 1)
        //     ->where('p.id !=', $product->id)
        //     ->limit(10)
        //     ->orderBy('RAND()')
        //     ->select('p.id, p.slug, p.title, p.thumbnail')
        //     ->get()->getResultArray();

        $metaDescription = preg_replace('/\s+/', ' ', str_replace(["\r", "\n"], '', strip_tags(str_replace('&nbsp;', ' ', $product->description))));
        $metaData = [
            'name' => $product->title,
            'description' => $metaDescription,
            'image' => 'https://karyapilarnusantara.com/images/products/' . $product->slug . '/' . $product->image,
            'sku' => '-',
            'brand' => 'Karya Pilar Nusantara',
            'manufacturer' => 'PT Karya Pilar Nusantara',
            'url' => 'https://karyapilarnusantara.com/product/' . $product->slug,
            'in_stock' => true
        ];

        // return view('v2/id/product_id', ['products' => $products]);
        if (!in_array($lang, $supported)) {
            // Optional: fallback or show 404
            return view('v2/id/product_id');
        }
        if ($lang == 'en') {
            return view('v2/en/product_detail_en', ['product' => $product, 'variants' => $variants, 'images' => $images, 'products' => $products, 'meta_description' => $metaDescription, 'meta_product' => $metaData]);
        } else if ($lang == 'cn') {
            return view('v2/cn/product_detail_cn', ['product' => $product, 'variants' => $variants, 'images' => $images, 'products' => $products, 'meta_description' => $metaDescription, 'meta_product' => $metaData]);
        } else {
            return view('v2/id/product_detail_id', ['product' => $product, 'variants' => $variants, 'images' => $images, 'products' => $products, 'meta_description' => $metaDescription, 'meta_product' => $metaData]);
        }
    }

    public function aboutUs_v2($lang = 'id'): string
    {
        // $this->cachePage(86400);
        $supported = ['id', 'en', 'cn'];
        if (!in_array($lang, $supported)) {
            // Optional: fallback or show 404
            return view('v2/id/contact_us_id');
        }
        if ($lang == 'en') {
            return view('v2/en/about_us_en');
        } else if ($lang == 'cn') {
            return view('v2/cn/about_us_cn');
        } else {
            return view('v2/id/about_us_id');
        }
    }

    public function contactUs_v2($lang = 'id'): string
    {
        // $this->cachePage(86400);
        $supported = ['id', 'en', 'cn'];
        if (!in_array($lang, $supported)) {
            // Optional: fallback or show 404
            return view('v2/id/contact_us_id');
        }
        if ($lang == 'en') {
            return view('v2/en/contact_us_en');
        } else if ($lang == 'cn') {
            return view('v2/cn/contact_us_cn');
        } else {
            return view('v2/id/contact_us_id');
        }
    }
}

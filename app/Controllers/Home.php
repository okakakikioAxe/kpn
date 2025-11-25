<?php

namespace App\Controllers;

use App\Models\Galery;

class Home extends BaseController
{
    public function index_v2($lang = 'id'): string
    {
        $supported = ['id', 'en', 'cn'];
        if (!in_array($lang, $supported)) {
            return view('v2/id/homepage_id');
        }
        return view('v2/' . $lang . '/homepage_' . $lang, ['categories' => $this->getCategories($lang)]);
        // $this->cachePage(86400);
    }

    public function galery_v2($lang = 'id'): string
    {
        $supported = ['id', 'en', 'cn'];
        if (!in_array($lang, $supported)) {
            return view('v2/id/gallery_id');
        }

        $galeryModel = new Galery();
        $galleries = $galeryModel->where('status', 1)->findAll();

        return view('v2/' . $lang . '/gallery_' . $lang, ['galleries' => $galleries, 'categories' => $this->getCategories($lang)]);
    }

    public function product_v2($lang = 'id'): string
    {
        $supported = ['id', 'en', 'cn'];
        if (!in_array($lang, $supported)) {
            return view('v2/id/product_id');
        }

        $db = \Config\Database::connect();

        $selectedCategoryColumn = [
            'c.id',
            'c.image',
            'c.slug',
            'c.title',
            'c.description',
            'c.sort_order',
            'p.id as product_id',
            'p.title as product_title',
            'p.slug as product_slug',
            'p.thumbnail'
        ];

        if ($lang == 'en') {
            $selectedCategoryColumn[3] = 'c.en_title as title';
            $selectedCategoryColumn[4] = 'c.en_description as description';
        } else if ($lang == 'cn') {
            $selectedCategoryColumn[3] = 'c.cn_title as title';
            $selectedCategoryColumn[4] = 'c.cn_description as description';
        }

        $categories = $db->table('categories c')
            ->select(implode(',', $selectedCategoryColumn))
            ->join(
                'products p',
                'p.category COLLATE utf8mb4_unicode_ci = c.slug COLLATE utf8mb4_unicode_ci 
         AND p.status = 1',
                'left',
                false // <- PENTING agar tidak di-escape CI
            )
            ->orderBy('category', 'DESC')
            ->get()

            ->getResultArray();

        $result  = [];
        foreach ($categories  as $row) {
            $catId = $row['id'];

            if (!isset($result[$catId])) {
                $result[$catId] = [
                    'id' => $row['id'],
                    'title' => $row['title'],
                    'slug' => $row['slug'],
                    'image' => $row['image'],
                    'description' => $row['description'],
                    'products' => [],
                    'first_row_products' => []
                ];
            }

            if (!empty($row['product_id'])) {
                $product = [
                    'id' => $row['product_id'],
                    'title' => $row['product_title'],
                    'slug' => $row['product_slug'],
                    'thumbnail' => $row['thumbnail']
                ];


                // hanya 5 produk pertama
                if (count($result[$catId]['first_row_products']) < 5) {
                    $result[$catId]['first_row_products'][] = $product;
                } else {
                    $result[$catId]['products'][] = $product;
                }
            }
        }

        $categories = array_values($result);

        $products = $db->table('products p')
            ->where('p.status', 1)
            ->select('p.id, p.slug, p.title, p.thumbnail')
            ->get()->getResultArray();

        $productCounts = $db->table('products')
            ->select('category, COUNT(id) as total_products')
            ->groupBy('category')
            ->orderBy('category', 'ASC')
            ->get()
            ->getResultArray();

        $countsMap = array_column($productCounts, 'total_products', 'category');

        foreach ($categories as &$cat) {
            $total = $countsMap[$cat['slug']] ?? 0;
            if ($total != 0) {
                $total = $total - 5 <= 0 ? 0 : $total - 5;
            }
            $cat['total_products'] = $total;
        }

        $topProducts = $db->table('top_products t')
            ->join(
                'products p',
                'p.id = t.product_id AND p.status = 1',
                'left' // <- PENTING agar tidak di-escape CI
            )
            ->orderBy('t.sort_order', 'ASC')
            ->get()

            ->getResultArray();

        // return dd($categories);

        return view('v2/' . $lang . '/product_' . $lang, ['products' => $products, 'categories' => $categories, 'top_products' => $topProducts]);
    }

    public function product_category_v2($slug, $lang = 'id'): string
    {
        $supported = ['id', 'en', 'cn'];
        if (!in_array($lang, $supported)) {
            return view('v2/id/product_id');
        }

        $db = \Config\Database::connect();

        $selectedCategoryColumn = ['id', 'image', 'slug', 'title', 'description'];

        if ($lang == 'en') {
            $selectedCategoryColumn[3] = 'en_title as title';
            $selectedCategoryColumn[4] = 'en_description as description';
        } else if ($lang == 'cn') {
            $selectedCategoryColumn[3] = 'cn_title as title';
            $selectedCategoryColumn[4] = 'cn_description as description';
        }

        $category = $db->table('categories c')
            ->where('c.slug', $slug)
            ->select($selectedCategoryColumn)
            ->get()->getResultArray();

        $products = $db->table('products p')
            ->where('p.status', 1)
            ->where('p.category', $slug)
            ->select('p.id, p.slug, p.title, p.thumbnail')
            ->get()->getResultArray();

        return view('v2/' . $lang . '/product_category_' . $lang, ['products' => $products, 'category' => $category, 'categories' => $this->getCategories($lang)]);
    }

    public function productList()
    {
        $page = $this->request->getGet('page') ?? 1;
        $keyword = $this->request->getGet('keyword') ?? '';
        $category = $this->request->getGet('category') ?? '';
        $limit = $this->request->getGet('limit') ?? 10;
        $perPage = $limit;
        $offset = ($page - 1) * $perPage;

        $fields = [
            'id',
            'slug',
            'title',
            'thumbnail',
        ];

        if ($limit > 10) {
            $fields[] = 'description';
        }

        $db = \Config\Database::connect();
        $builder = $db->table('products')
            ->select($fields)
            ->like('title', $keyword)
            ->where('status', 1)
            ->orderBy('sort_order', 'ASC');

        if (!is_null($category) && $category != '') {
            $builder->where('category', $category);
        }

        $total = $builder->countAllResults(false); // keep query for later
        $products = $builder->limit($perPage, $offset)->get()->getResultArray();

        if ($limit > 10) {
            // Hapus HTML tag, Potong sampai 155 karakter, tambahkan "…" jika lebih panjang
            foreach ($products as &$product) {
                $plain = strip_tags($product['description']);
                $product['meta_description'] = mb_substr($plain, 0, 130, 'UTF-8') . '…';
                unset($product['description']);
            }
        }

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
        if (!in_array($lang, $supported)) {
            return view('v2/id/product_id');
        }

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


        return view('v2/' . $lang . '/product_detail_' . $lang, ['product' => $product, 'variants' => $variants, 'images' => $images, 'products' => $products, 'meta_description' => $metaDescription, 'meta_product' => $metaData, 'categories' => $this->getCategories($lang)]);
    }

    public function aboutUs_v2($lang = 'id'): string
    {
        // $this->cachePage(86400);
        $supported = ['id', 'en', 'cn'];
        if (!in_array($lang, $supported)) {
            return view('v2/id/contact_us_id');
        }
        return view('v2/' . $lang . '/about_us_' . $lang, ['categories' => $this->getCategories($lang)]);
    }

    public function contactUs_v2($lang = 'id'): string
    {
        // $this->cachePage(86400);
        $supported = ['id', 'en', 'cn'];
        if (!in_array($lang, $supported)) {
            return view('v2/id/contact_us_id');
        }
        return view('v2/' . $lang . '/contact_us_' . $lang, ['categories' => $this->getCategories($lang)]);
    }

    function excerpt_html($html, $limit = 155)
    {
        // 1. Hapus semua tag HTML
        $text = strip_tags($html);
        // 2. Jika panjangnya sudah <= limit, kembalikan apa adanya
        if (mb_strlen($text, 'UTF-8') <= $limit) {
            return $text;
        }
        // 3. Potong, lalu tambahkan ellipsis
        return mb_substr($text, 0, $limit, 'UTF-8') . '...';
    }

    function getCategories($lang = 'id')
    {
        $db = \Config\Database::connect();

        // Select the appropriate title column based on the language
        if ($lang == 'id') {
            $titleColumn = 'c.title'; // Dynamically selects c.id_title, c.en_title, or c.cn_title
        } else {
            $titleColumn = 'c.' . $lang . '_title'; // Dynamically selects c.id_title, c.en_title, or c.cn_title
        }

        // Query the database and select the correct title column based on the language
        $categories = $db->table('categories as c')
            ->select('c.slug, ' . $titleColumn . ' as title')  // Alias the selected title column as 'title'
            ->orderBy('c.id', 'ASC')
            ->get()
            ->getResultArray();

        return $categories;
    }
}
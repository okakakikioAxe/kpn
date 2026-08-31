<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductVariant;
use App\Helpers\Base64ImageHelper;

class ProductController extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();

        // Get all products with their variants
        $query = $db->table('products p')
            ->select('p.*')
            ->orderBy('sort_order', 'ASC')
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

            // Get variants for this product ordered by 'order'
            $images = $db->table('product_images')
                ->where('product_id', $product['id'])
                ->get()
                ->getResultArray();

            // Extract colors into a separate list
            $colorList = array_column($variants, 'color');

            // Add the formatted data to the product
            $product['color_list'] = $colorList;
            $product['variant_list'] = $variants;
            $product['image_list'] = $images;
        }

        $categories = $db->table('categories c')
            ->select('c.*')
            ->orderBy('sort_order', 'ASC')
            ->get()->getResultArray();

        $successMessage = session()->getFlashdata('successMessage');
        return view('admin/v2/product_v2', ['products' => $products, 'categories' => $categories, 'successMessage' => $successMessage]);

    }

    public function edit($id): string
    {
        $db = \Config\Database::connect();
        
        $productModel = new Product();
        $product = $productModel->find($id);
        
        // Get variants for this product ordered by 'order'
        $variants = $db->table('product_variants')
            ->where('product_id', $id)
            ->orderBy('order', 'ASC')
            ->get()
            ->getResultArray();
        
        // Extract colors into a separate list
        $colorList = array_column($variants, 'color');
        
        // Add the formatted data to the product
        $product['color_list'] = $colorList;
        $product['variant_list'] = $variants;
        

        $successMessage = session()->getFlashdata('successMessage');
        return view('admin/edit_product', ['product' => $product, 'successMessage' => $successMessage]);
    }


    public function create(): string
    {
        // $this->cachePage(86400);
        return view('admin/add_product');
    }

    public function store()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $validation = \Config\Services::validation();
 
        $validation->setRules([
            'file-upload' => [
                'rules' => 'uploaded[file-upload]|mime_in[file-upload,image/jpg,image/jpeg,image/png]|max_size[file-upload,5000]',
                'errors' => [
                    'uploaded' => 'No file was uploaded',
                    'mime_in' => 'The file must be an image',
                    'max_size' => 'The file size must not exceed 5MB'
                ]
            ],
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'required|min_length[3]',
        ]);


        if (!$validation->withRequest($this->request)->run()) {
            session()->setFlashdata('successMessage',  json_encode($validation->getErrors()));
            return redirect()->to('/admin/product');
        }



        $file = $this->request->getFile('file-upload');
        $thumbnailFile = $this->request->getPost('thumbnail');
        $fileNamePrefix = date('Y-m-d-H-i-s') . '-product-';
        $fileName =  $fileNamePrefix . str_replace(' ', '-', $this->request->getPost('title')) . '.';
        $productId = 0;
        if ($file->isValid() && !$file->hasMoved()) {
            $newFileName = $fileName . $file->getExtension();
            $newThumbnailName = $fileName . 'jpeg';
            $file->move('galery/content', $newFileName);

            // Convert base64 thumbnail to file and store it
            $this->saveThumbnail($thumbnailFile, $newThumbnailName);
            
            $data = [
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'image' => $newFileName,
                'category' => $this->request->getPost('category'),
                'thumbnail' => $newThumbnailName,
            ];

            $productModel = new Product();
            $productId = $productModel->insert($data);
        }

        // Get all uploaded files
        $files = $this->request->getFiles();
        
        // Initialize response array
        $uploadedFiles = [];
        $failedFiles = [];

        // Process uploaded images
        if ($files && array_key_exists('variants', $files)) {
            if ($files['variants'] != null) {
                // When using multiple file inputs with same name (images[])
                foreach ($files['variants'] as $key => $img) {
                    if ($img->isValid() && !$img->hasMoved()) {
                        // Generate a random file name
                        $variantName = "var-".$key."-".$fileName. $img->getExtension();
                        
                        // Move the file to the uploads directory
                        if ($img->move('galery/content', $variantName)) {
                            $uploadedFiles[] = [
                                'name' => $variantName,
                                'order' => $key,
                            ];

                            $data = [
                                'product_id' => $productId,
                                'image' => $variantName,
                                'title' => $this->request->getPost('titles')[$key],
                                'color' => $this->request->getPost('colors')[$key],
                                'order' => $key,
                            ];
                
                            $variantModel = new ProductVariant();
                            $variantModel->insert($data);
                        } else {
                            $failedFiles[] = $img->getClientName();
                        }
                    } else {
                        $failedFiles[] = $img->getClientName();
                    }
                }
            }
        }

        session()->setFlashdata('successMessage', 'Konten berhasil ditambahkan!');
        return redirect()->to('/admin/product');
    }


    public function update($id): ResponseInterface
    {
        date_default_timezone_set('Asia/Jakarta');
        $validation = \Config\Services::validation();

        $validation->setRules([
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'required|min_length[3]',
            'category' => 'required|in_list[hdpe,eva,xpe,toy]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            session()->setFlashdata('successMessage',  json_encode($validation->getErrors()));
            return redirect()->to('/admin/product');
        }

        $updatedData = [];
        $updatedImage = [];

        $productModel = new Product();
        $product = $productModel->find($id);

        if ($product) {

            $file = $this->request->getFile('file-upload');
            $thumbnailFile = $this->request->getPost('thumbnail');
            $fileNamePrefix = date('Y-m-d-H-i-s') . '-product-';
            $fileNameOnly =  $fileNamePrefix . str_replace(' ', '-', $this->request->getPost('title'));
            $fileName =  $fileNamePrefix . str_replace(' ', '-', $this->request->getPost('title')) . '.';

            if ($file && $file->isValid() && !$file->hasMoved()) {
                // delete product image and thumbnail
                $filePath = FCPATH . 'galery/content/' . $product['image'];
                $thumbnailPath = FCPATH . 'galery/thumbnail/' . $product['thumbnail'];
                if(file_exists($filePath)){
                    unlink($filePath);
                }
                if(file_exists($thumbnailPath)){
                    unlink($thumbnailPath);
                }

                $newFileName = $fileName . $file->getExtension();
                $newThumbnailName = $fileName . 'jpeg';
                $file->move('galery/content', $newFileName);
    
                // Convert base64 thumbnail to file and store it
                $this->saveThumbnail($thumbnailFile, $newThumbnailName);
                
                $updatedImage = [
                    'image' => $newFileName,
                    'thumbnail' => $newThumbnailName,
                ];
            }
            $updatedData = ['title' => $this->request->getPost('title'), 'description' => $this->request->getPost('description'),'category' => $this->request->getPost('category')];
            $updatedValue = array_merge($updatedData, $updatedImage); 
            $productModel->update($id, $updatedValue);

            
        
            // update variants order
            $variantOrder = json_decode($this->request->getPost('variant-order'), true);

            $deletedVariants = explode(",",$this->request->getPost('deleted-variants'));
            // loop throught variant order and update each variant
            foreach ($deletedVariants as $variantId) {
                $variantModel = new ProductVariant();
                $variant = $variantModel->find($variantId);
                if($variant ){
                    $filePath = FCPATH . 'galery/content/' . $variant['image'];
                    if(file_exists($filePath)){
                        unlink($filePath);
                    }
                    $variantModel->delete($variantId);
                }
            }

            foreach ($variantOrder as $index => $variant) {
                
                $variantId = $variant['id'];
                
                $newImageName = null;
                $imageType = null;
                if($variant['image'] == null){
                    continue;
                }
                else if(Base64ImageHelper::isValidBase64Image($variant['image'])){
                    // If the base64 string contains the data URI scheme (e.g., data:image/jpeg;base64,), extract the base64 part
                    if (preg_match('/^data:image\/(\w+);base64,/', $variant['image'], $matches)) {
                        // Get the image type (jpeg, png, etc.)
                        $imageType = $matches[1];
                        
                        // Remove the data URI scheme part
                        $base64Image = substr($variant['image'], strpos($variant['image'], ',') + 1);
                    } else {
                        // Try to determine image type from base64 data
                        $decodedData = base64_decode($variant['image']);
                        $firstBytes = substr($decodedData, 0, 12);
                        
                        if (strpos($firstBytes, "\xFF\xD8\xFF") === 0) {
                            $imageType = 'jpeg';
                        } elseif (strpos($firstBytes, "\x89\x50\x4E\x47\x0D\x0A\x1A\x0A") === 0) {
                            $imageType = 'png';
                        } elseif (strpos($firstBytes, "GIF") === 0) {
                            $imageType = 'gif';
                        } elseif (strpos($firstBytes, "WEBP") !== false) {
                            $imageType = 'webp';
                        } else {
                            $imageType = 'png'; // Default to png if can't determine type
                        }
                    }

                    // Save the image
                    $result = Base64ImageHelper::saveBase64Image(
                        $variant['image'],
                        'galery/content/',
                        $variantName = "var-".$index."-".$fileNameOnly
                    );
                    $newImageName = "var-".$index."-".$fileNameOnly;
                }
                else{
                    $newImageName = null;

                }

                

                if(str_starts_with($variant['id'], 'new')){
                    if ($result === false) {
                        session()->setFlashdata('successMessage', 'Produk gagal diupdate!');
                        return redirect()->to('/admin/product');
                    }
                    else{
                        // store to database
                        $data = [
                            'product_id' => $id,
                            'image' => $newImageName.'.'.$imageType,
                            'title' => $this->request->getPost('titles')[$index],
                            'color' => $this->request->getPost('colors')[$index],
                            'order' => $index,
                        ];
                        $variantModel = new ProductVariant();
                        $variantModel->insert($data);
                    }
                }
                else{
                    $variantModel = new ProductVariant();
                    $newImageData = [];
                    if($newImageName !== null){
                        $dbVariant = $variantModel->find($variantId);
                        // delete old image from storage
                        $filePath = FCPATH . 'galery/content/' . $dbVariant['image'];
                        if(file_exists($filePath)){
                            unlink($filePath);
                        }
                        $newImageData = ['image' => $newImageName.'.'.$imageType];
                    }
                    $variantModel->update($variantId, ['order' => $index,'title' => $this->request->getPost('titles')[$index],
                            'color' => $this->request->getPost('colors')[$index],]
                            + $newImageData);
                }
            }
            session()->setFlashdata('successMessage', 'Konten berhasil diupdate!');
            return redirect()->to('/admin/product');
        } else{
            return redirect()->back()->withInput()->with('errors', 'data tidak ditemukan');
        }
    }

    public function saveThumbnail($base64Image, $fileName)
    {
        // Extract base64 data (remove the data URL prefix)
        list($type, $imageData) = explode(';', $base64Image);
        list(, $imageData) = explode(',', $imageData);
        $imageData = base64_decode($imageData);

        $filePath = FCPATH . 'galery/thumbnail/' . $fileName;

        // Save the image
        file_put_contents($filePath, $imageData);
    }
    
    public function saveProductThumbnail($base64Image, $fileName, $slug)
    {
        // Extract base64 data (remove the data URL prefix)
        list($type, $imageData) = explode(';', $base64Image);
        list(, $imageData) = explode(',', $imageData);
        $imageData = base64_decode($imageData);

        $filePath = FCPATH . 'images/products/' . $slug . '/' . $fileName;

        // Save the image
        file_put_contents($filePath, $imageData);
    }

    public function showToast()
    {
        $message = $this->request->getGet('text') ?? "No message provided.";

        session()->setFlashdata('successMessage', esc(urldecode($message)));
        return redirect()->to('/admin/product');
    }

    public function delete($id)
    {
        $db = \Config\Database::connect();
        $productModel = new Product();
        $product = $productModel->find($id);

        // delete product image and thumbnail
        $filePath = FCPATH . 'images/products/' . $product['slug'] . '/' . $product['image'];
        $thumbnailPath = FCPATH . 'galery/thumbnail/' . $product['slug'] . '/' . $product['thumbnail'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        if (file_exists($thumbnailPath)) {
            unlink($thumbnailPath);
        }

        // Get variants for this product ordered by 'id'
        $variants = $db->table('product_variants')
            ->where('product_id', $product['id'])
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();

        // Delete each variant image
        if ($variants) {
            foreach ($variants as $variant) {
                $variantFilePath = FCPATH . 'galery/content/' . $variant['image'];
                if (file_exists($variantFilePath)) {
                    unlink($variantFilePath);
                }

                // delete each variant
                $variantModel = new ProductVariant();
                $variantModel->delete($variant['id']);
            }
        }
        $productModel->delete($id);
        session()->setFlashdata('successMessage', 'Produk berhasil dihapus!');
        return redirect()->to('/admin/product');
    }
    
    
    public function saveProductCover()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        // $request = $this->request->getJSON();
        
        $productId = $this->request->getPost('product_id') ?? null;
        $slug = $this->request->getPost('slug') ?? null;
        $image = $this->request->getFile('image') ?? null;
        $thumbnail = $this->request->getPost('thumbnail') ?? null;

        if (!$productId || !$slug || !$image) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields.'
            ]);
        }

        $productImagePath = FCPATH . "images/products/$slug/";

        $product =  $db->table('products')->where('id', $productId)->get()->getResultArray()[0];

        $imagePath = $productImagePath . $product['image'];
        $thumbnailPath = $productImagePath . $product['thumbnail'];

        // hapus image
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        // hapus thumbnail
        if (file_exists($thumbnailPath)) {
            unlink($thumbnailPath);
        }


        $imageNameTemplate = $slug . '-' . uniqid();
        $imageName =   $imageNameTemplate . '.' . $image->getExtension();
        $newThumbnailName = 'thumbnail-' . $imageNameTemplate . '.webp';
        $image->move('images/products/' . $slug, $imageName);

        // Convert base64 thumbnail to file and store it
        $this->saveProductThumbnail($thumbnail, $newThumbnailName, $slug);

        $db->table('products')
            ->where('id', $productId)
            ->update([
                'image' => $imageName, // bisa dari upload, atau base64 decode & simpan
                'thumbnail' => $newThumbnailName, // bisa dari upload, atau base64 decode & simpan
            ]);

        $product =  $db->table('products')->where('id', $productId)->get()->getResultArray()[0];


        return $this->response->setJSON([
            'success' => true,
            'product' => $product,
        ]);
    }

    public function saveProductImages()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();

        $productId = $request->product_id ?? null;
        $slug = $request->slug ?? null;
        $images = $request->images ?? [];

        if (!$productId || !$slug || !is_array($images)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields.'
            ]);
        }

        $productImagePath = FCPATH . "images/products/$slug/";

        // 1. Delete all DB records, don't delete physical files
        $db->table('product_images')->where('product_id', $productId)->delete();

        $savedFilenames = [];

        foreach ($images as $i => $item) {
            $src = $item->src ?? '';
            $isNew = $item->is_new ?? false;

            if ($isNew && preg_match('/^data:image\/(\w+);base64,/', $src, $type)) {
                $data = substr($src, strpos($src, ',') + 1);
                $data = base64_decode($data);
                $ext = strtolower($type[1]);
                $filename = uniqid() . '-' . $slug . '.' . $ext;

                if (!is_dir($productImagePath)) {
                    mkdir($productImagePath, 0755, true);
                }
                file_put_contents($productImagePath . $filename, $data);
            } else {
                $filename = basename($src); // use existing filename
            }

            // Save to DB
            $db->table('product_images')->insert([
                'product_id' => $productId,
                'image' => $filename,
                'sort_order' => $i,
            ]);

            $savedFilenames[] = $filename;
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Images saved.',
            'files' => $savedFilenames
        ]);
    }

    public function saveProductVariants()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();

        $productId = $request->product_id ?? null;
        $slug = $request->slug ?? null;
        $images = $request->images ?? [];

        if (!$productId || !$slug || !is_array($images)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields.'
            ]);
        }

        $productImagePath = FCPATH . "images/products/$slug/";

        // 1. Delete all DB records, don't delete physical files
        $db->table('product_variants')->where('product_id', $productId)->delete();
        $savedFilenames = [];

        foreach ($images as $i => $item) {
            $src = $item->image ?? '';

            // jika gambaer baru
            if (preg_match('/^data:image\/(\w+);base64,/', $src, $type)) {
                $data = substr($src, strpos($src, ',') + 1);
                $data = base64_decode($data);
                $ext = strtolower($type[1]);
                $filename = uniqid() . '-' . $slug . '.' . $ext;

                if (!is_dir($productImagePath)) {
                    mkdir($productImagePath, 0755, true);
                }
                file_put_contents($productImagePath . $filename, $data);
            } else {
                $filename = basename($src); // use existing filename
            }

            // Save to DB
            $db->table('product_variants')->insert([
                'product_id' => $productId,
                'image' => $filename,
                'title' => $item->title,
                'color' => $item->color,
                'order' => $i,
            ]);

            $savedFilenames[] = $filename;
        }

        $variants = $db->table('product_variants')
            ->where('product_id', $productId)
            ->orderBy('order', 'ASC')
            ->get()
            ->getResultArray();

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Images saved.',
            'files' => $savedFilenames,
            'variants' => $variants
        ]);
    }

    public function getNewProduct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();

        // Cek apakah ada produk dengan status = 3
        $builder = $db->table('products');
        $product = $builder->where('status', 3)->get()->getRow();

        if (!$product) {
            // Data default yang akan dimasukkan
            $data = [
                'slug'        => 'new-slug',
                'image'       => '-',
                'thumbnail'   => '-',
                'title'       => 'title',
                'description' => '<p>tulis deskripsimu disini...</p>',
                'category'    => 'lainnya',
                'specs'       => '{}',
                'status'      => 3,
                'sort_order'  => 999
            ];

            // Insert data
            $builder->insert($data);

            // Ambil data produk yang baru saja dimasukkan
            $product = $builder->where('status', 3)->get()->getRow();
        }


        // Get variants for this product ordered by 'order'
        $variants = $db->table('product_variants')
            ->where('product_id', $product->id)
            ->orderBy('order', 'ASC')
            ->get()
            ->getResultArray();

        // Get variants for this product ordered by 'order'
        $images = $db->table('product_images')
            ->where('product_id', $product->id)
            ->get()
            ->getResultArray();

        // // Extract colors into a separate list
        $colorList = array_column($variants, 'color');

        // Add the formatted data to the product
        $product->color_list = $colorList;
        $product->variant_list = $variants;
        $product->image_list = $images;

        // Mengembalikan JSON
        return $this->response->setJSON([
            'success' => true,
            'product' => $product
        ]);
    }

    public function checkAvailableSlug()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();
        $slug = $request->slug ?? null;

        // Cek apakah ada produk dengan status = 3
        $builder = $db->table('products');
        $product = $builder->where('slug', $slug)->get()->getRow();

        if ($product) {
            // slug tidak bisa dipakai
            return $this->response->setJSON([
                'success' => false
            ]);
        } else {
            // slug bisa dipakai
            return $this->response->setJSON([
                'success' => true
            ]);
        }
    }

    public function saveProductTitle()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();
        $productId = $request->product_id ?? null;
        $title = $request->title ?? null;

        // tambahkan created_at & updated_at
        $db->table('products')
            ->where('id', $productId)
            ->update([
                'title' => $title
            ]);

        // Mengembalikan JSON
        return $this->response->setJSON([
            'success' => true
        ]);
    }


    public function confirmSlug()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();
        $productId = $request->product_id ?? null;
        $slug = $request->slug ?? null;

        // tambahkan created_at & updated_at
        $db->table('products')
            ->where('id', $productId)
            ->update([
                'slug' => $slug,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        // buat folder untuk gambar
        $productImagePath = FCPATH . 'images/products/' . $slug;
        $this->makeFolderIfNotExists($productImagePath);

        $product = $db->table('products')->where('id', $productId)->get()->getRow();

        // Get variants for this product ordered by 'order'
        $variants = $db->table('product_variants')
            ->where('product_id', $product->id)
            ->orderBy('order', 'ASC')
            ->get()
            ->getResultArray();

        // Get variants for this product ordered by 'order'
        $images = $db->table('product_images')
            ->where('product_id', $product->id)
            ->get()
            ->getResultArray();

        // // Extract colors into a separate list
        $colorList = array_column($variants, 'color');

        // Add the formatted data to the product
        $product->color_list = $colorList;
        $product->variant_list = $variants;
        $product->image_list = $images;

        // Mengembalikan JSON
        return $this->response->setJSON([
            'success' => true,
            'product' => $product
        ]);
    }



    public function saveProductSpecifications()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();

        $productId = $request->product_id ?? null;
        $slug = $request->slug ?? null;
        $specs = $request->specs ?? null;

        if (!$productId || !$slug) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields.'
            ]);
        }

        $db->table('products')
            ->where('id', $productId)
            ->update([
                'specs' => $specs, // bisa dari upload, atau base64 decode & simpan
                // bisa dari upload, atau base64 decode & simpan
            ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Spec saved.'
        ]);
    }

    public function saveProductStatus()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();

        $productId = $request->product_id ?? null;
        $status = $request->status ?? null;

        if (!$productId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields.'
            ]);
        }

        $db->table('products')
            ->where('id', $productId)
            ->update([
                'status' => $status, // bisa dari upload, atau base64 decode & simpan
                // bisa dari upload, atau base64 decode & simpan
            ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Status saved.'
        ]);
    }
    
    public function saveProductCategory()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();

        $productId = $request->product_id ?? null;
        $categoryId = $request->category_id ?? null;

        if (!$productId || !$categoryId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields.'
            ]);
        }

        $categoryModel = new Category();
        $category = $categoryModel->find($categoryId);

        if($category){
            $db->table('products')
            ->where('id', $productId)
            ->update([
                'category' => $category['slug'], // bisa dari upload, atau base64 decode & simpan
                // bisa dari upload, atau base64 decode & simpan
            ]);

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Category saved.'
            ]);
        }
        else{
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Category not Found'
            ]);
        }

        
    }

    public function saveProductDescription()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();

        $productId = $request->product_id ?? null;
        $description = $request->description ?? null;

        if (!$productId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields.'
            ]);
        }

        $db->table('products')
            ->where('id', $productId)
            ->update([
                'description' => $description, // bisa dari upload, atau base64 decode & simpan
                // bisa dari upload, atau base64 decode & simpan
            ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Description saved.'
        ]);
    }

    public function saveProductSortOrder()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();

        $products = $request->products ?? null;

        if (!$products) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields.'
            ]);
        }

        $productList = json_decode($products);

        foreach ($productList->order as $index => $productId) {
            $db->table('products')
                ->where('id', $productId)
                ->update([
                    'sort_order' => $index, // bisa dari upload, atau base64 decode & simpan
                    // bisa dari upload, atau base64 decode & simpan
                ]);
        }

        return $this->response->setJSON([
            'success' => true,
            'message' => $productList->order
        ]);
    }

    public function deleteProduct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();

        $productId = $request->product_id ?? null;

        if (!$productId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields.'
            ]);
        }

        $product = $db->table('products')->where('id', $productId)->get()->getRow();

        if ($product) {
            // hapus folder terkait
            $filePath = FCPATH . 'images/products/' . $product->slug;

            $this->deleteFolder($filePath);

            // hapus variant
            $db->table('product_variants')
                ->where('product_id', $productId)
                ->delete();
            // hapus images
            $db->table('product_images')
                ->where('product_id', $productId)
                ->delete();
            // hapus product
            $db->table('products')
                ->where('id', $productId)
                ->delete();
            return $this->response->setJSON([
                'success' => true
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false
            ]);
        }
    }

    public function csrfToken()
    {
        return $this->response->setJSON([
            'csrf_token' => csrf_hash(),
        ]);
    }

    function makeFolderIfNotExists(string $path): bool
    {
        if (!is_dir($path)) {
            return mkdir($path, 0755, true);
        }
        return true;
    }

    function deleteFolder($folderPath)
    {
        if (!is_dir($folderPath)) return false;

        $files = array_diff(scandir($folderPath), ['.', '..']);
        foreach ($files as $file) {
            $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;
            is_dir($filePath) ? $this->deleteFolder($filePath) : unlink($filePath);
        }

        return rmdir($folderPath);
    }
}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Helpers\Base64ImageHelper;

class ProductController extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();
        
        // Get all products with their variants
        $query = $db->table('products p')
        ->select('p.id, p.title, p.description as description, p.image, p.thumbnail')
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

        $successMessage = session()->getFlashdata('successMessage');
        return view('admin/product', ['images' => $products, 'successMessage' => $successMessage]);
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

    // public function show($id): string
    // {
    //     // $this->cachePage(86400);
    //     $galeryModel = new Galery();
    //     $content = $galeryModel->find($id);
    //     return view('admin/edit_galery', ['content' => $content]);
    // }

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
            'category' => 'required|in_list[hdpe,eva,xpe,toy]',
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
        if ($files) {
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

        session()->setFlashdata('successMessage', 'Konten berhasil ditambahkan!');
        return redirect()->to('/admin/product');
    }


    public function update($id): ResponseInterface
    {
        // date_default_timezone_set('Asia/Jakarta');
        // $validation = \Config\Services::validation();

        // $validation->setRules([
        //     'title' => 'required|min_length[3]|max_length[255]',
        //     'description' => 'required|min_length[3]',
        //     'category' => 'required|in_list[hdpe,eva,xpe,toy]',
        // ]);

        // if (!$validation->withRequest($this->request)->run()) {
        //     session()->setFlashdata('successMessage',  json_encode($validation->getErrors()));
        //     return redirect()->to('/admin/product');
        // }

        // $updatedData = [];
        // $updatedImage = [];

        // $productModel = new Product();
        // $product = $productModel->find($id);

        // if ($product) {

        //     $file = $this->request->getFile('file-upload');
        //     $thumbnailFile = $this->request->getPost('thumbnail');
            $fileNamePrefix = date('Y-m-d-H-i-s') . '-product-';
            $fileNameOnly =  $fileNamePrefix . str_replace(' ', '-', $this->request->getPost('title'));
            $fileName =  $fileNamePrefix . str_replace(' ', '-', $this->request->getPost('title')) . '.';

        //     if ($file && $file->isValid() && !$file->hasMoved()) {
        //         // delete product image and thumbnail
        //         $filePath = FCPATH . 'galery/content/' . $product['image'];
        //         $thumbnailPath = FCPATH . 'galery/thumbnail/' . $product['thumbnail'];
        //         if(file_exists($filePath)){
        //             unlink($filePath);
        //         }
        //         if(file_exists($thumbnailPath)){
        //             unlink($thumbnailPath);
        //         }

        //         $newFileName = $fileName . $file->getExtension();
        //         $newThumbnailName = $fileName . 'jpeg';
        //         $file->move('galery/content', $newFileName);
    
        //         // Convert base64 thumbnail to file and store it
        //         $this->saveThumbnail($thumbnailFile, $newThumbnailName);
                
        //         $updatedImage = [
        //             'image' => $newFileName,
        //             'thumbnail' => $newThumbnailName,
        //         ];
        //     }
        //     $updatedData = ['title' => $this->request->getPost('title'), 'description' => $this->request->getPost('description'),'category' => $this->request->getPost('category')];
        //     $updatedValue = array_merge($updatedData, $updatedImage); 
        //     $productModel->update($id, $updatedValue);

            
        //     session()->setFlashdata('successMessage', 'Konten berhasil diupdate!');
        //     return redirect()->to('/admin/product');
        // } else{
        //     return redirect()->back()->withInput()->with('errors', 'data tidak ditemukan');
        // }
        // update variants order
        $variantOrder = json_decode($this->request->getPost('variant-order'), true);
        // loop throught variant order and update each variant
        foreach ($variantOrder as $index => $variant) {
            $variantId = $variant['id'];
            $newImageName = null;
            $imageType = null;
            if(Base64ImageHelper::isValidBase64Image($variant['image'])){
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
        $filePath = FCPATH . 'galery/content/' . $product['image'];
        $thumbnailPath = FCPATH . 'galery/thumbnail/' . $product['thumbnail'];
        if(file_exists($filePath)){
            unlink($filePath);
        }
        if(file_exists($thumbnailPath)){
            unlink($thumbnailPath);
        }

        // Get variants for this product ordered by 'id'
        $variants = $db->table('product_variants')
        ->where('product_id', $product['id'])
        ->orderBy('id', 'ASC')
        ->get()
        ->getResultArray();

        // Delete each variant image
        if($variants) {
            foreach ($variants as $variant) {
                $variantFilePath = FCPATH . 'galery/content/' . $variant['image'];
                if(file_exists($variantFilePath)){
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
}
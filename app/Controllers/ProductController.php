<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Product;
use App\Models\ProductVariant;

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
                'label' => 'File Upload',
                'rules' => 'uploaded[file-upload]|mime_in[file-upload,image/jpg,image/jpeg,image/png]|max_size[file-upload,5000]',
                'errors' => [
                    'uploaded' => 'No file was uploaded',
                    'mime_in' => 'The file must be an image',
                    'max_size' => 'The file size must not exceed 5MB'
                ]
            ],
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'required|min_length[3]',
            'category' => 'required|in_list["hdpe","eva","xpe","toy",]',
        ]);


        if (!$validation->withRequest($this->request)->run()) {
            session()->setFlashdata('successMessage', 'Error!');
            return redirect()->to('/admin/product/create')->withInput()->with('errors', $validation->getErrors());
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


    // public function update($id): ResponseInterface
    // {
    //     date_default_timezone_set('Asia/Jakarta');
    //     $validation = \Config\Services::validation();

    //     $validation->setRules([
    //         'title' => 'required|min_length[3]|max_length[255]',
    //         'description' => 'required|min_length[3]',
    //     ]);


    //     if (!$validation->withRequest($this->request)->run()) {
    //         return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    //     }

    //     $galleryModel = new Galery();
    //     $gallery = $galleryModel->find($id);

    //     if (!$gallery) {
    //         return redirect()->back()->withInput()->with('errors', 'data tidak ditemukan');
    //     }

    //     $galleryModel->update($id, ['title' => $this->request->getPost('title'), 'description' => $this->request->getPost('description')]);

    //     session()->setFlashdata('successMessage', 'Konten berhasil diupdate!');
    //     return redirect()->to('/admin/galery');
    // }

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

    // public function stream($filename)
    // {
    //     $videoPath = FCPATH . 'galery/content/' . $filename; // Change the path as needed

    //     if (!file_exists($videoPath)) {
    //         return $this->response->setStatusCode(404)->setBody('File not found');
    //     }

    //     $fileSize = filesize($videoPath);
    //     $handle = fopen($videoPath, 'rb');
    //     $start = 0;
    //     $end = $fileSize - 1;

    //     if (isset($_SERVER['HTTP_RANGE'])) {
    //         preg_match('/bytes=(\d+)-(\d+)?/', $_SERVER['HTTP_RANGE'], $matches);
    //         $start = intval($matches[1]);
    //         $end = isset($matches[2]) ? intval($matches[2]) : $end;
    //         header('HTTP/1.1 206 Partial Content');
    //     } else {
    //         header('HTTP/1.1 200 OK');
    //     }

    //     header('Content-Type: video/mp4'); // Adjust according to the video format
    //     header('Accept-Ranges: bytes');
    //     header("Content-Length: " . ($end - $start + 1));
    //     header("Content-Range: bytes $start-$end/$fileSize");

    //     fseek($handle, $start);
    //     while (!feof($handle) && ($pos = ftell($handle)) <= $end) {
    //         echo fread($handle, 8192);
    //         flush();
    //     }
    //     fclose($handle);
    //     exit;
    // }

    // public function toggleStatus($id)
    // {
    //     date_default_timezone_set('Asia/Jakarta');
    //     $galleryModel = new Galery();
    //     $gallery = $galleryModel->find($id);

    //     if (!$gallery) {
    //         return $this->response->setJSON([
    //             'message' => 'Gallery item not found.'
    //         ])->setStatusCode(ResponseInterface::HTTP_NOT_FOUND);
    //     }

    //     // Toggle status
    //     $newStatus = $gallery['status'] == 1 ? 0 : 1;
    //     $galleryModel->update($id, ['status' => (int) $newStatus]);

    //     return $this->response->setJSON([
    //         'message' => 'Status updated successfully.',
    //         'new_status' => $newStatus
    //     ])->setStatusCode(ResponseInterface::HTTP_OK);
    // }

    // public function delete($id)
    // {
    //     $galleryModel = new Galery();
    //     $gallery = $galleryModel->find($id);

    //     $filePath = FCPATH . 'galery/content/' . $gallery['image'];
    //     $thumbnailPath = FCPATH . 'galery/thumbnail/' . $gallery['thumbnail'];
    //     unlink($filePath);
    //     unlink($thumbnailPath);

    //     $galleryModel->delete($id);
    //     session()->setFlashdata('successMessage', 'Konten berhasil dihapus!');
    //     return redirect()->to('/admin/galery');
    // }
}

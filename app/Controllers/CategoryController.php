<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Category;
use App\Helpers\Base64ImageHelper;

class CategoryController extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();

        // Get all categorys with their variants
        $query = $db->table('categories c')
            ->select('c.*')
            ->orderBy('sort_order', 'ASC')
            ->get();

        $categories = $query->getResultArray();
        return view('admin/v2/category_v2', ['categories' => $categories]);
    }

    public function update($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();

        $categoryModel = new Category();
        $category = $categoryModel->find($id);

        // file operation
        $fileNamePrefix = date('Y-m-d-H-i-s') . '-category-';
        $fileNameOnly =  $fileNamePrefix . str_replace(' ', '-', $this->request->getPost('title'));
        $fileName =  $fileNamePrefix . str_replace(' ', '-', $this->request->getPost('title')) . '.';
        $file = $this->request->getFile('file-upload');
        $updatedData = [
            'title' => $this->request->getPost('title'), 
            'en_title' => $this->request->getPost('en_title'), 
            'cn_title' => $this->request->getPost('cn_title'), 
            'description' => $this->request->getPost('description'),
            'en_description' => $this->request->getPost('en_description'),
            'cn_description' => $this->request->getPost('cn_description')
        ];
        $updatedValue = $updatedData;

        $categoryModel->update($id, $updatedValue);
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $filePath = FCPATH . 'images/category/' . $category['image'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $newFileName = $fileName . $file->getExtension();
            $file->move('images/category', $newFileName);

            $updatedImage = [
                    'image' => $newFileName
                ];
            $updatedValue = array_merge($updatedData, $updatedImage);
        }
        // end of file operation
        $categoryModel->update($id, $updatedValue);


        return $this->response->setJSON([
            'category' => $updatedData,
            'success' => true,
        ]);
    }

    public function store()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();

        $categoryModel = new Category();
        

        // file operation
        $fileNamePrefix = date('Y-m-d-H-i-s') . '-category-';
        $fileNameOnly =  $fileNamePrefix . str_replace(' ', '-', $this->request->getPost('title'));
        $fileName =  $fileNamePrefix . str_replace(' ', '-', $this->request->getPost('title')) . '.';
        $file = $this->request->getFile('file-upload');
        $updatedData = [
            'title' => $this->request->getPost('title'), 
            'en_title' => $this->request->getPost('en_title'), 
            'cn_title' => $this->request->getPost('cn_title'), 
            'description' => $this->request->getPost('description'),
            'en_description' => $this->request->getPost('en_description'),
            'cn_description' => $this->request->getPost('cn_description'),
            'slug' => $this->request->getPost('slug')];
        $updatedValue = $updatedData;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            
            $newFileName = $fileName . $file->getExtension();
            $file->move('images/category', $newFileName);

            $updatedImage = [
                    'image' => $newFileName
                ];
            $updatedValue = array_merge($updatedData, $updatedImage);
        }
        // end of file operation
        $categoryModel->insert($updatedValue);


        return $this->response->setJSON([
            'category' => $categoryModel,
            'success' => true,
        ]);
    }

    public function deleteCategory()
    {
        date_default_timezone_set('Asia/Jakarta');
        $db = \Config\Database::connect();
        $request = $this->request->getJSON();

        $categoryId = $request->category_id ?? null;

        if (!$categoryId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields.'
            ]);
        }

        $category = $db->table('categories')->where('id', $categoryId)->get()->getRow();

        if ($category && $category->slug != 'lainnya') {
            // hapus folder terkait
            $filePath = FCPATH . 'images/category/' . $category->image;
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            // update semua produk yang memiliki kategori ini ke kategori lainnya
            $db->table('products')
                ->where('category', $category->slug)
                ->update([
                    'category' => 'lainnya', // bisa dari upload, atau base64 decode & simpan
                    // bisa dari upload, atau base64 decode & simpan
                ]);

            // hapus kategory
            $db->table('categories')
                ->where('id', $categoryId)
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
}
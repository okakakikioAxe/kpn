<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Galery;

class GaleryController extends BaseController
{
    public function index(): string
    {
        $galeryModel = new Galery();
        $images = $galeryModel->findAll();
        $successMessage = session()->getFlashdata('successMessage');
        // $this->cachePage(86400);
        return view('admin/galery', ['images' => $images, 'successMessage' => $successMessage]);
    }

    public function create(): string
    {
        // $this->cachePage(86400);
        return view('admin/add_galery');
    }

    public function store(): ResponseInterface
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'file-upload' => [
                'label' => 'File Upload',
                'rules' => 'uploaded[file-upload]|mime_in[file-upload,image/jpg,image/jpeg,image/png,video/mp4,video/mpeg]|max_size[file-upload,500000]',
                'errors' => [
                    'uploaded' => 'No file was uploaded',
                    'mime_in' => 'The file must be an image or video',
                    'max_size' => 'The file size must not exceed 500MB'
                ]
            ],
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'required|min_length[3]',
            'type' => 'required|in_list[0,1]'
        ]);


        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }



        $file = $this->request->getFile('file-upload');
        $thumbnailFile = $this->request->getPost('thumbnail');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = date('Y-m-d-H-i-s') . '-' . str_replace(' ', '-', $this->request->getPost('title')) . '.' . $file->getExtension();
            $file->move('galery/content', $newName);

            // Convert base64 thumbnail to file and store it
            $this->saveThumbnail($thumbnailFile, $newName);
        }

        $galeryModel = new Galery();
        $galeryModel->save([
            'image' => $newName,
            'image_alt' => $this->request->getPost('title'),
            'thumbnail' => $newName,
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'type' => $this->request->getPost('type'),
            'status' => 1,
        ]);
        session()->setFlashdata('successMessage', 'Konten berhasil ditambahkan!');
        return redirect()->to('/admin/galery');
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

    public function tesToast()
    {
        // $galeryModel = new Galery();
        // $images = $galeryModel->findAll();
        // // $this->cachePage(86400);
        // return view('admin/galery', ['images' => $images, "success" => 'Konten telah ditambahkan']);
        session()->setFlashdata('successMessage', 'Konten berhasil ditambahkan!');
        return redirect()->to('/admin/galery');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Galery;

class GaleryController extends BaseController
{
    public function index(): string
    {
        // $this->cachePage(86400);
        return view('admin/galery');
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
                'rules' => 'uploaded[file-upload]|mime_in[file-upload,image/jpg,image/jpeg,image/png,video/mp4,video/mpeg]|max_size[file-upload,10240]',
                'errors' => [
                    'uploaded' => 'No file was uploaded',
                    'mime_in' => 'The file must be an image or video',
                    'max_size' => 'The file size must not exceed 10MB'
                ]
            ],
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'required|min_length[3]'
        ]);


        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }



        $file = $this->request->getFile('file-upload');
        $thumbnailFile = $this->request->getPost('thumbnail');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = uniqid() . '-' . str_replace(' ', '-', $this->request->getPost('title')) . '.' . $file->getExtension();
            $file->move('images/galery', $newName);

            // Convert base64 thumbnail to file and store it
            $this->saveThumbnail($thumbnailFile, $newName);
        }
        // return $this->response->setJSON([
        //     'status' => $this->request->getPost('title'),
        //     'message' => $this->request->getPost('description'),
        //     'file_name' => $newName,
        //     'thumbnail' => $newName,
        // ]);

        $galeryModel = new Galery();
        $galeryModel->save([
            'image' => $newName,
            'image_alt' => $this->request->getPost('title'),
            'thumbnail' => $newName,
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => 1,
        ]);

        return redirect()->to('/admin/galery')->with('success', 'Galery has been added');
    }

    public function saveThumbnail($base64Image, $fileName)
    {
        // Extract base64 data (remove the data URL prefix)
        list($type, $imageData) = explode(';', $base64Image);
        list(, $imageData) = explode(',', $imageData);
        $imageData = base64_decode($imageData);

        $filePath = FCPATH . 'images/thumbnail/' . $fileName;

        // Save the image
        file_put_contents($filePath, $imageData);
    }
}

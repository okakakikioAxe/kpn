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
            $newName = date('Y-m-d-H-i-s') . '-' . str_replace(' ', '-', $this->request->getPost('title')) . '.';
            $newFileName = $newName . $file->getExtension();
            $newThumbnailName = $newName . 'jpeg';
            $file->move('galery/content', $newFileName);

            // Convert base64 thumbnail to file and store it
            $this->saveThumbnail($thumbnailFile, $newThumbnailName);
        }

        $galeryModel = new Galery();
        $galeryModel->save([
            'image' => $newFileName,
            'image_alt' => $this->request->getPost('title'),
            'thumbnail' => $newThumbnailName,
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

    public function stream($filename)
    {
        $videoPath = FCPATH . 'galery/content/' . $filename; // Change the path as needed

        if (!file_exists($videoPath)) {
            return $this->response->setStatusCode(404)->setBody('File not found');
        }

        $fileSize = filesize($videoPath);
        $handle = fopen($videoPath, 'rb');
        $start = 0;
        $end = $fileSize - 1;

        if (isset($_SERVER['HTTP_RANGE'])) {
            preg_match('/bytes=(\d+)-(\d+)?/', $_SERVER['HTTP_RANGE'], $matches);
            $start = intval($matches[1]);
            $end = isset($matches[2]) ? intval($matches[2]) : $end;
            header('HTTP/1.1 206 Partial Content');
        } else {
            header('HTTP/1.1 200 OK');
        }

        header('Content-Type: video/mp4'); // Adjust according to the video format
        header('Accept-Ranges: bytes');
        header("Content-Length: " . ($end - $start + 1));
        header("Content-Range: bytes $start-$end/$fileSize");

        fseek($handle, $start);
        while (!feof($handle) && ($pos = ftell($handle)) <= $end) {
            echo fread($handle, 8192);
            flush();
        }
        fclose($handle);
        exit;
    }

    public function toggleStatus($id)
    {

        $galleryModel = new Galery();
        $gallery = $galleryModel->find($id);

        if (!$gallery) {
            return $this->response->setJSON([
                'message' => 'Gallery item not found.'
            ])->setStatusCode(ResponseInterface::HTTP_NOT_FOUND);
        }

        // Toggle status
        $newStatus = $gallery['status'] == 1 ? 0 : 1;
        $galleryModel->update($id, ['status' => (int) $newStatus]);

        return $this->response->setJSON([
            'message' => 'Status updated successfully.',
            'new_status' => $newStatus
        ])->setStatusCode(ResponseInterface::HTTP_OK);
    }
}

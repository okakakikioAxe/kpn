<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\Shield\Authentication\Auth;

class AuthRedirect implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!auth()->loggedIn()) {
            session()->set('redirect_url', current_url()); // Simpan URL saat ini
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // return redirect()->to('/admin');
    }

    protected function afterLogin(ResponseInterface $response)
    {
        $redirectUrl = session()->get('redirect_url') ?? '/admin';
        session()->remove('redirect_url'); // Hapus agar tidak tersimpan terus
        return redirect()->to($redirectUrl);
    }
}


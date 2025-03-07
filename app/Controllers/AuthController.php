<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function login()
    {
        $auth = auth('session'); // Gunakan Shield session authenticator

        $credentials = $this->request->getPost(['email', 'password']);
        $remember = (bool) $this->request->getPost('remember');

        if (!$auth->attempt($credentials, $remember)) {
            return redirect()->back()->withInput()->with('error', 'Login gagal, periksa kembali email dan password.');
        }

        // Ambil URL tujuan dari session (jika ada) atau arahkan ke default
        $redirectUrl = session()->get('redirect_url') ?? '/admin';
        session()->remove('redirect_url'); // Hapus agar tidak digunakan lagi

        return redirect()->to($redirectUrl);
    }
}

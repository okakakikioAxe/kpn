<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Shield\Models\UserModel;
use App\Models\AuthIdentityModel;

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
    public function changePassword()
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'password' => 'required|min_length[8]|max_length[255]|regex_match[/\d/]', // Minimal 8 karakter dengan setidaknya satu angka
            'password2' => 'required|matches[password]', // Konfirmasi password harus sama
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        // Ambil user yang sedang login
        $user = auth()->user();

        $newPassword = service('passwords')->hash($this->request->getPost('password'));

        $model = new AuthIdentityModel();

        // Update password menggunakan UserModel
        $model->update($user->id, ['secret2' => $newPassword]);

        return redirect()->to('/admin/galery')->with('successMessage', 'Password berhasil diubah.');
    }
}

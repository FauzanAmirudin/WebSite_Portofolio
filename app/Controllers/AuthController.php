<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new User();
        $user = $userModel->where('email', $email)->first();

        // Verifikasi user dan password
        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
                'isLoggedIn' => true
            ]);

            // Redirect ke halaman dashboard
            return redirect()->to('/admin');
        }

        // Jika login gagal
        return redirect()->back()->with('error', 'Email atau password salah!');
    }

    public function dashboard()
    {
        // Cek apakah sudah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Tampilkan halaman dashboard
        return view('admin/blog/index');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}

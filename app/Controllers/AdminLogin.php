<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminLogin extends Controller
{
    public function index()
    {
        // If already logged in, redirect to dashboard
        if (session()->get('is_admin')) {
            return redirect()->to('/admin/dashboard');
        }
        return view('admin_login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        // Simple hardcoded check (replace with DB check in production)
        if ($username === 'admin' && $password === 'admin123') {
            session()->set('is_admin', true);
            return redirect()->to('/admin/dashboard');
        } else {
            return view('admin_login', ['error' => 'Invalid credentials']);
        }
    }

    public function logout()
    {
        session()->remove('is_admin');
        return redirect()->to('/admin');
    }
} 
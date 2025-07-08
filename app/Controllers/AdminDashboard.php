<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminDashboard extends Controller
{
    public function index()
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/admin');
        }
        return view('admin_dashboard');
    }
} 
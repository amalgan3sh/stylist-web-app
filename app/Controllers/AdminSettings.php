<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminSettings extends Controller
{
    public function index()
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/admin');
        }
        // In a real app, fetch settings from DB or config
        $site_title = 'Style With J';
        $site_email = 'sample@gmail.com';
        return view('admin_settings', [
            'site_title' => $site_title,
            'site_email' => $site_email,
        ]);
    }
} 
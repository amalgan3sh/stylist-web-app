<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminBlog extends Controller
{
    public function index()
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/admin');
        }
        // In a real app, fetch blog posts from DB here
        $posts = [
            [
                'id' => 1,
                'title' => '5 Signs It’s Time for a Wardrobe Refresh',
                'date' => '2024-06-15',
                'status' => 'Published',
            ],
            [
                'id' => 2,
                'title' => 'What Your Clothes Say Before You Do',
                'date' => '2024-06-10',
                'status' => 'Draft',
            ],
            [
                'id' => 3,
                'title' => 'Dressing With Intention: A Stylist’s Guide to Capsule Wardrobes',
                'date' => '2024-05-28',
                'status' => 'Published',
            ],
        ];
        return view('admin_blog', ['posts' => $posts]);
    }
} 
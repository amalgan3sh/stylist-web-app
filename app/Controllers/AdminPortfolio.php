<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminPortfolio extends Controller
{
    public function index()
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/admin');
        }
        // In a real app, fetch portfolio items from DB here
        $portfolio = [
            [
                'id' => 1,
                'title' => 'Summer Style Story',
                'image' => '/assets/img/gallery/gal-1-1.jpg',
                'type' => 'Lookbook',
                'status' => 'Visible',
            ],
            [
                'id' => 2,
                'title' => 'Wedding Guest Look',
                'image' => '/assets/img/gallery/gal-1-2.jpg',
                'type' => 'Event',
                'status' => 'Hidden',
            ],
            [
                'id' => 3,
                'title' => 'Corporate Makeover',
                'image' => '/assets/img/gallery/gal-1-3.jpg',
                'type' => 'Corporate',
                'status' => 'Visible',
            ],
        ];
        return view('admin_portfolio', ['portfolio' => $portfolio]);
    }
} 
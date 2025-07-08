<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminEnquiries extends Controller
{
    public function index()
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/admin');
        }
        // In a real app, fetch enquiries from DB here
        $enquiries = [
            [
                'id' => 1,
                'name' => 'Aditi Sharma',
                'email' => 'aditi@example.com',
                'subject' => 'Wardrobe Refresh',
                'date' => '2024-06-15',
                'status' => 'New',
            ],
            [
                'id' => 2,
                'name' => 'Rahul Mehra',
                'email' => 'rahul@example.com',
                'subject' => 'Corporate Styling',
                'date' => '2024-06-14',
                'status' => 'Read',
            ],
        ];
        return view('admin_enquiries', ['enquiries' => $enquiries]);
    }
} 
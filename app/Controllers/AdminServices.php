<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminServices extends Controller
{
    public function index()
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/admin');
        }
        // In a real app, fetch services from DB here
        $services = [
            [
                'id' => 1,
                'name' => 'Wardrobe Refresh',
                'description' => 'Audit and restyle your current wardrobe.',
                'category' => 'Personal',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'name' => 'New Wardrobe Creation',
                'description' => 'Build a complete wardrobe that fits your lifestyle.',
                'category' => 'Personal',
                'status' => 'Active',
            ],
            [
                'id' => 3,
                'name' => 'Occasion Styling',
                'description' => 'Curate outfits for special events.',
                'category' => 'Event',
                'status' => 'Inactive',
            ],
            [
                'id' => 4,
                'name' => 'Corporate Styling',
                'description' => 'Polish your professional presence.',
                'category' => 'Corporate',
                'status' => 'Active',
            ],
        ];
        return view('admin_services', ['services' => $services]);
    }
} 
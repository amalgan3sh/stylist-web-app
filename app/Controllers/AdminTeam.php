<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AdminTeam extends Controller
{
    public function index()
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/admin');
        }
        // In a real app, fetch team members from DB here
        $team = [
            [
                'id' => 1,
                'name' => 'Jennifer',
                'role' => 'Lead Stylist',
                'photo' => '/assets/img/team/team-1-1.png',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'name' => 'Priya Nair',
                'role' => 'Assistant Stylist',
                'photo' => '/assets/img/team/team-1-2.png',
                'status' => 'Inactive',
            ],
        ];
        return view('admin_team', ['team' => $team]);
    }
} 
<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header') . view('index'). view('footer');
    }
    public function about(): string
    {
        return view('header') . view('about'). view('footer');
    }
    public function service(): string
    {
        return view('header') . view('service'). view('footer');
    }
    public function serviceDetails(): string
    {
        return view('header') . view('service-details'). view('footer');
    }
    public function blog(): string
    {
        return view('header') . view('blog'). view('footer');
    }
    public function blogDetails(): string
    {
        return view('header') . view('blog-details'). view('footer');
    }
    public function appointment(): string
    {
        return view('header') . view('appointment'). view('footer');
    }
    public function gallery(): string
    {
        return view('header') . view('gallery'). view('footer');
    }
    public function galleryDetails(): string
    {
        return view('header') . view('gallery-details'). view('footer');
    }
    public function team(): string
    {
        return view('header') . view('team'). view('footer');
    }
    public function teamDetails(): string
    {
        return view('header') . view('team-details'). view('footer');
    }
    public function contact(): string
    {
        return view('header') . view('contact'). view('footer');
    }

}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function __construct()
    {

    }
    public function index()
    {
        return view('layout/templates', [
            'title'   => 'Home Page',
            'content' => 'index',
        ]);
    }
    public function about()
    {
        return view('layout/templates', [
            'title'   => 'About Us',
            'content' => 'about',
        ]);
    }
    public function controllers()
    {
        return view('layout/templates', [
            'title'   => 'Controllers',
            'content' => 'controllers',
        ]);
    }
    public function staff()
    {
        return view('layout/templates', [
            'title'   => 'Staff',
            'content' => 'staff',
        ]);
    }
    public function latestInfo()
    {
        return view('layout/templates', [
            'title'   => 'Latest Info',
            'content' => 'latest_info',
        ]);
    }
    public function downloads()
    {
        return view('layout/templates', [
            'title'   => 'Downloads',
            'content' => 'downloads',
        ]);
    }
    public function contact()
    {
        return view('layout/templates', [
            'title'   => 'Contact Us',
            'content' => 'contact',
        ]);
    }

}

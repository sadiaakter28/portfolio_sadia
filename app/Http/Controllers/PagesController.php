<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    // Backend
    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function main()
    {
        return view('backend.main');
    }

    public function services()
    {
        return view('backend.services');
    }

    public function portfolio()
    {
        return view('backend.portfolio');
    }
    public function about()
    {
        return view('backend.about');
    }

    public function contact()
    {
        return view('backend.contact');
    }


}

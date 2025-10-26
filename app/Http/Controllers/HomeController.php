<?php

namespace App\Http\Controllers;

// use App\Models\Profile;

class HomeController extends Controller
{
    public function index()
    {
        // $profiles = Profile::latest()->take(8)->get();
        return view('home');
    }

    public function profile()
    {
        return view('webpage.profile');
    }
}
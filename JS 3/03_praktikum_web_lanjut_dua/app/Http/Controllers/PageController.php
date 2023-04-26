<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', ['active' => 'home']);
    }

    public function about()
    {
        return view('pages.about', ['active' => 'about']);
    }

    public function features()
    {
        return view('pages.features', ['active' => 'features']);
    }

    public function contact()
    {
        return view('pages.contact', ['active' => 'contact']);
    }
}

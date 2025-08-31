<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitecontroller extends Controller
{
     public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function serveses()
    {
        return view('serveses');
    }


}

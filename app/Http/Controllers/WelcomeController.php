<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function portofolio()
    {
        return view('porto');
    }

}
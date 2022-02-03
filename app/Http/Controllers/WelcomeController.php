<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function porto()
    {
        return view('porto');
    }

    public function detail_porto()
    {
        return view('details-porto');
    }

    public function curriculum_vitae()
    {
        return view('curriculum');
    }

}

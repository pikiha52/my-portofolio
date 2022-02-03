<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function porto()
    {
        $portofolio = Portofolio::with('details')->get();
        return view('porto', compact('portofolio'));
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

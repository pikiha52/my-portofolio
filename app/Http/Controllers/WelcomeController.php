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
        return view('porto');
    }

    public function detail_porto($id)
    {
        $portofolio = Portofolio::find($id);
        
        if (empty($portofolio)) {
            return route('/');
        }

        $details = $portofolio->with('details')->whereHas('details', function($query) use($id) {
            $query->where('portofolio_id', $id);
        })->get();

        return view('details-porto', compact('portofolio', 'details'));
    }

    public function curriculum_vitae()
    {
        return view('curriculum');
    }

}

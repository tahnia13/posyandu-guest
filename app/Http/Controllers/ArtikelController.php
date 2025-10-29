<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel.index');
    }

    public function show($slug)
    {
        return view('artikel.show', compact('slug'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function show(string $slug)
    {
        return view('kategori.show', compact('slug'));
    }
}

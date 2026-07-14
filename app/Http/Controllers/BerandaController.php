<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\ProdukData;
class BerandaController extends Controller
{
    public function index()
    {
        $produkUnggulan = ProdukData::unggulan();

        return view('beranda', compact('produkUnggulan'));
    }

    public function tentang()
    {
        $profilToko = [
            'nama' => 'TokoKu',
            'alamat' => 'Jalan-jalan',
            'developer' => 'Nuzul',
        ];

        return view('tentang', compact('profilToko'));
    }
}

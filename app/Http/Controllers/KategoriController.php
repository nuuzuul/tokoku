<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\ProdukData;
class KategoriController extends Controller
{
    public function show(string $slug)
    {
        $produk = ProdukData::perKategori($slug);

        $daftarKategori = ProdukData::daftarKategori();

        $namaKategori = $daftarKategori[$slug] ?? ucfirst($slug);

        return view('kategori.show', compact(
            'produk',
            'namaKategori'
        ));
    }
}

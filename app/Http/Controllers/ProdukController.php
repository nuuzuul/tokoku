<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\ProdukData;
class ProdukController extends Controller
{
    public function index()
    {
        $produk = ProdukData::semua();

        return view('produk.index', compact('produk'));
    }

    public function show(int $id)
    {
        $produk = ProdukData::cari($id);

        if ($produk === null) {
            abort(404);
        }

        $produkTerkait = ProdukData::produkTerkait(
            $produk['slug_kategori'],
            $produk['id'],
            3
        );

        return view('produk.show', compact(
            'produk',
            'produkTerkait'
        ));
    }
}

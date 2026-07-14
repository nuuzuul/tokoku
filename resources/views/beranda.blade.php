@extends('layouts.app')

@section('judul', 'Beranda - TokoKu')

@section('konten')

    <section class="hero">
        <div class="container">
            <h1>Selamat Datang di TokoKu</h1>

            <p>
                Temukan berbagai produk pilihan dengan harga terbaik.
            </p>

            <a href="{{ route('produk.index') }}">
                Lihat Semua Produk
            </a>
        </div>
    </section>

    <section class="produk-section">
        <div class="container">

            <h2>Produk Unggulan</h2>

            <div class="grid-produk">

                @foreach ($produkUnggulan as $p)

                    <x-kartu-produk :produk="$p" />

                @endforeach

            </div>

        </div>
    </section>

@endsection
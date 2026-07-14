@extends('layouts.app')

@section('judul', 'Detail Produk - TokoKu')

@section('konten')

    <section class="detail-produk">
        <div class="container">

            <h1>{{ $produk['nama'] }}</h1>

            <p>
                <strong>Kategori:</strong>
                {{ $produk['kategori'] }}
            </p>
            {{-- tampil sebagai Rp 8.750.000 --}}
            <p>
                <strong>Harga:</strong>
                Rp {{ number_format($produk['harga'], 0, ',', '.') }}
            </p>

            <p>
                <strong>Stok:</strong>

                @if ($produk['stok'] > 0)
                    {{ $produk['stok'] }} produk tersedia
                @else
                    Stok Habis
                @endif
            </p>

            <p>
                <strong>Deskripsi:</strong><br>
                {{ $produk['deskripsi'] }}
            </p>

            <a href="{{ route('produk.index') }}">
                Kembali ke Daftar Produk
            </a>

        </div>
    </section>

@endsection
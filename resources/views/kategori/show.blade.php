@extends('layouts.app')

@section('judul', 'Kategori - TokoKu')

@section('konten')

    <section>
        <h1>Kategori Produk</h1>

        <p>
            Slug kategori: {{ $slug }}
        </p>

        <a href="{{ route('produk.index') }}">
            Kembali ke Produk
        </a>
    </section>

@endsection
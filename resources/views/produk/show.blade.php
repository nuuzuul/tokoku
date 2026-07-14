@extends('layouts.app')

@section('judul', 'Detail Produk - TokoKu')

@section('konten')

    <section>
        <h1>Detail Produk</h1>

        <p>
            ID produk: {{ $id }}
        </p>

        <a href="{{ route('produk.index') }}">
            Kembali ke Produk
        </a>
    </section>

@endsection
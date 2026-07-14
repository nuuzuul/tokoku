@extends('layouts.app')

@section('judul', 'Produk - TokoKu')

@section('konten')

    <section>
        <h1>Daftar Produk</h1>

        <div class="grid-produk">
            @foreach ($produk as $p)
                <x-kartu-produk :produk="$p" />
            @endforeach
        </div>
    </section>

@endsection
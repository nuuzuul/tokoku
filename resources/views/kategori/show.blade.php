@extends('layouts.app')

@section('judul', 'Kategori - TokoKu')

@section('konten')

    <section class="produk-section">
        <div class="container">

            <h1>Kategori {{ $namaKategori }}</h1>

            <div class="grid-produk">

                @foreach ($produk as $p)

                    <x-kartu-produk :produk="$p" />

                @endforeach

            </div>

        </div>
    </section>

@endsection
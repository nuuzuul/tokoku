@extends('layouts.app')

@section('judul', 'Produk - TokoKu')

@section('konten')

    <section class="produk-section">
        <div class="container">

            <h1>Semua Produk</h1>

            <div class="grid-produk">

                @foreach ($produk as $p)

                    <x-kartu-produk :produk="$p" />

                @endforeach

            </div>

        </div>
    </section>

@endsection
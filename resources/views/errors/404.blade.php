@extends('layouts.app')

@section('judul', '404 - Halaman Tidak Ditemukan')

@section('konten')

    <section class="halaman-404">
        <div class="container">

            <div class="kotak-404">
                <p class="kode-404">404</p>

                <h1>Halaman Tidak Ditemukan</h1>

                <p>
                    Maaf, halaman atau produk yang kamu cari tidak tersedia.
                </p>

                <div class="aksi-404">
                    <a
                        href="{{ route('beranda') }}"
                        class="tombol-detail"
                    >
                        Kembali ke Beranda
                    </a>

                    <a
                        href="{{ route('produk.index') }}"
                        class="tombol-sekunder"
                    >
                        Lihat Semua Produk
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
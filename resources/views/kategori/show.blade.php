@extends('layouts.app')

@section('judul', 'Kategori ' . $namaKategori . ' - TokoKu')

@section('konten')

    <section class="produk-section">
        <div class="container">

            <h1>Kategori {{ $namaKategori }}</h1>

            <div class="grid-produk">

                @forelse ($produk as $p)

                    <x-kartu-produk :produk="$p" />

                @empty

                    <div class="kategori-kosong">
                        <h2>Belum ada produk di kategori ini</h2>

                        <p>
                            Silakan lihat kategori lain atau kembali ke halaman
                            semua produk.
                        </p>

                        <a
                            href="{{ route('produk.index') }}"
                            class="tombol-detail"
                        >
                            Lihat Semua Produk
                        </a>
                    </div>

                @endforelse

            </div>

        </div>
    </section>

@endsection
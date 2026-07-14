@extends('layouts.app')

@section('judul', $produk['nama'] . ' - TokoKu')

@section('konten')

    <section class="detail-produk">
        <div class="container">

            <h1>{{ $produk['nama'] }}</h1>

            <p>
                <strong>Kategori:</strong>

                <a
                    href="{{ route('kategori.show', $produk['slug_kategori']) }}"
                >
                    {{ $produk['kategori'] }}
                </a>
            </p>
            {{-- tampil sebagai Rp 8.750.000 --}}
            <p>
                <strong>Harga:</strong>
                Rp {{ number_format($produk['harga'], 0, ',', '.') }}
            </p>

            <p>
                <strong>Status stok:</strong>

                @if ($produk['stok'] > 0)
                    <span class="stok-tersedia">
                        Tersedia ({{ $produk['stok'] }})
                    </span>
                @else
                    <span class="stok-habis">
                        Stok Habis
                    </span>
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

    <section class="produk-terkait">
        <div class="container">

            <h2>Produk Terkait</h2>

            <div class="grid-produk">

                @forelse ($produkTerkait as $p)

                    <x-kartu-produk :produk="$p" />

                @empty

                    <div class="produk-terkait-kosong">
                        <p>
                            Belum ada produk terkait dari kategori ini.
                        </p>
                    </div>

                @endforelse

            </div>

        </div>
    </section>

@endsection
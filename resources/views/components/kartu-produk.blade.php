<article class="kartu-produk">

    <h3>{{ $produk['nama'] }}</h3>

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

    @if ($produk['stok'] > 0)
        <a
            href="{{ route('produk.show', $produk['id']) }}"
            class="tombol-detail"
        >
            Lihat Detail
        </a>
    @else
        <span class="tombol-detail tombol-nonaktif">
            Lihat Detail
        </span>
    @endif

</article>
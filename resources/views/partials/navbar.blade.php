<nav>
    <a href="{{ route('beranda') }}">
        TokoKu
    </a>

    <a href="{{ route('beranda') }}">
        Beranda
    </a>

    <a href="{{ route('produk.index') }}">
        Semua Produk
    </a>

    @foreach ($daftarKategori as $slug => $namaKategori)

        <a href="{{ route('kategori.show', $slug) }}">
            {{ $namaKategori }}
        </a>

    @endforeach

    <a href="{{ route('tentang') }}">
        Tentang
    </a>
</nav>
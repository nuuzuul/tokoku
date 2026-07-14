<nav>
    <a
        href="{{ route('beranda') }}"
        class="{{ request()->routeIs('beranda') ? 'aktif' : '' }}"
    >
        Beranda
    </a>

    <a
        href="{{ route('produk.index') }}"
        class="{{ request()->routeIs('produk.*') ? 'aktif' : '' }}"
    >
        Produk
    </a>

    @foreach ($daftarKategori as $slug => $namaKategori)
        <a
            href="{{ route('kategori.show', $slug) }}"
            class="{{ request()->routeIs('kategori.show') && request()->route('slug') === $slug ? 'aktif' : '' }}"
        >
            {{ $namaKategori }}
        </a>
    @endforeach

    <a
        href="{{ route('tentang') }}"
        class="{{ request()->routeIs('tentang') ? 'aktif' : '' }}"
    >
        Tentang
    </a>
</nav>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang TokoKu</title>
</head>
<body>

    <nav>
        <a href="{{ route('beranda') }}">Beranda</a>
        <a href="{{ route('produk.index') }}">Produk</a>
        <a href="{{ route('tentang') }}">Tentang</a>
    </nav>

    <h1>Tentang TokoKu</h1>

    <p>
        <strong>Nama toko:</strong>
        {{ $profilToko['nama'] }}
    </p>

    <p>
        <strong>Alamat:</strong>
        {{ $profilToko['alamat'] }}
    </p>

    <p>
        <strong>Developer:</strong>
        {{ $profilToko['developer'] }}
    </p>

</body>
</html>
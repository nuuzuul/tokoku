<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda TokoKu</title>
</head>
<body>

    <h1>Selamat Datang di TokoKu</h1>

    <p>Website katalog produk sederhana menggunakan Laravel.</p>

    <nav>
        <a href="{{ route('beranda') }}">Beranda</a>
        <a href="{{ route('produk.index') }}">Produk</a>
        <a href="{{ route('tentang') }}">Tentang</a>
    </nav>

</body>
</html>
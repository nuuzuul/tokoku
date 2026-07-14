<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk</title>
</head>
<body>

    <h1>Kategori Produk</h1>

    <p>Slug kategori: {{ $slug }}</p>

    <a href="{{ route('produk.index') }}">
        Kembali ke Produk
    </a>

</body>
</html>
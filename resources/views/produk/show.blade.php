<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>

    <h1>Detail Produk</h1>

    <p>ID produk: {{ $id }}</p>

    <a href="{{ route('produk.index') }}">
        Kembali ke Produk
    </a>

</body>
</html>
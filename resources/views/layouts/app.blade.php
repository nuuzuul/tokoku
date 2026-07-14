<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/tokoku.css') }}">
    <title>@yield('judul', 'TokoKu')</title>
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('konten')
    </main>

    @include('partials.footer')

</body>
</html>
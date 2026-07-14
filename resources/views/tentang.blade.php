@extends('layouts.app')

@section('judul', 'Tentang - TokoKu')

@section('konten')

    <section>
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
    </section>

@endsection
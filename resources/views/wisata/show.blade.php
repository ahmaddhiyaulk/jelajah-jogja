
@extends('layouts.app')

@section('title', $wisata['nama'] . ' | Jelajah Jogja')

@section('content')

<div class="mb-4">
    <a href="{{ route('wisata.index') }}"
       class="text-decoration-none">
        &larr; Kembali ke Katalog
    </a>
</div>

<div class="card">
    <img
        src="{{ $wisata['gambar'] }}"
        alt="{{ $wisata['nama'] }}"
        class="card-img-top"
        style="height: 420px;"
    >

    <div class="card-body p-4 p-md-5">

        <span class="badge text-bg-success mb-3">
            {{ $wisata['kategori'] }}
        </span>

        <h1 class="section-title">
            {{ $wisata['nama'] }}
        </h1>

        <p class="text-secondary mt-3">
            <strong>Lokasi:</strong> {{ $wisata['lokasi'] }}
        </p>

        <hr>

        <h5>Tentang Destinasi</h5>

        <p class="mt-3">
            {{ $wisata['deskripsi'] }}
        </p>

        <a href="{{ routes('wisata.index') }}"
           class="btn btn-jogja mt-3">
            Lihat Wisata Lainnya
        </a>

    </div>
</div>

@endsection

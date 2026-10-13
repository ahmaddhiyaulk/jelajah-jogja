
@extends('layouts.app')

@section('title', 'Beranda | Jelajah Jogja')

@section('content')

<div class="hero text-center mb-5">
    <p class="text-uppercase" style="letter-spacing: 3px;">
        Explore Yogyakarta
    </p>

    <h1 class="display-4 fw-bold">
        Jelajahi Pesona Jogja
    </h1>

    <p class="lead mt-3">
        Temukan destinasi alam, budaya, dan rekreasi
        yang menarik di Yogyakarta.
    </p>

    <a href="{{ route('wisata.index') }}"
       class="btn btn-light btn-lg mt-3">
        Jelajahi Wisata
    </a>
</div>

<div class="row align-items-center g-4">
    <div class="col-md-6">
        <h2 class="section-title">
            Tentang Jelajah Jogja
        </h2>

        <p class="mt-3">
            Jelajah Jogja adalah website katalog wisata yang
            menyajikan informasi berbagai destinasi di Yogyakarta.
        </p>

        <p>
            Mulai dari keindahan alam, bangunan bersejarah,
            hingga tempat rekreasi untuk mengisi waktu liburan.
        </p>

        <a href="{{ route('wisata.index') }}"
           class="btn btn-jogja">
            Lihat Katalog
        </a>
    </div>

    <div class="col-md-6">
        <img
            src="https://images.unsplash.com/photo-1518005020951-eccb494ad742?w=1000"
            alt="Arsitektur dan destinasi wisata"
            class="img-fluid rounded-4 shadow"
        >
    </div>
</div>

@endsection

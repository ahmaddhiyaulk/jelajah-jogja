
@extends('layouts.app')

@section('title', 'Katalog Wisata | Jelajah Jogja')

@section('content')

<div class="text-center mb-5">
    <p class="text-uppercase text-secondary">
        Discover Yogyakarta
    </p>

    <h1 class="section-title">
        Katalog Wisata
    </h1>

    <p class="text-secondary">
        Temukan destinasi wisata sesuai minatmu.
    </p>
</div>

<div class="row g-4">

    @foreach ($wisata as $item)
        <div class="col-md-6 col-lg-4">
            <div class="card">

                <img
                    src="{{ $item['gambar'] }}"
                    class="card-img-top"
                    alt="{{ $item['nama'] }}"
                >

                <div class="card-body d-flex flex-column">

                    <span class="badge text-bg-success align-self-start mb-2">
                        {{ $item['kategori'] }}
                    </span>

                    <h5 class="card-title">
                        {{ $item['nama'] }}
                    </h5>

                    <p class="text-secondary small">
                        {{ $item['lokasi'] }}
                    </p>

                    <p class="card-text">
                        {{ $item['deskripsi'] }}
                    </p>

                    <a
                        href="{{ route('wisata.show', $item['id']) }}"
                        class="btn btn-jogja mt-auto"
                    >
                        Lihat Detail
                    </a>

                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection

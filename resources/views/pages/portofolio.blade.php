@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')
    <section class="mb-4">
        <p class="text-danger fw-semibold text-uppercase mb-2">Portofolio</p>
        <h1 class="display-6 fw-bold">Proyek-proyek yang pernah kami bangun</h1>
        <p class="text-muted">Berikut contoh tampilan karya digital sederhana dengan desain modern dan struktur yang mudah dikembangkan.</p>
    </section>

    <section class="row g-4">
        @foreach ($proyek as $item)
            <article class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <span class="badge bg-{{ $item['warna'] }} mb-3">{{ $item['kategori'] }}</span>
                        <h2 class="h4 fw-bold">{{ $item['judul'] }}</h2>
                        <p class="text-muted">{{ $item['deskripsi'] }}</p>
                    </div>
                </div>
            </article>
        @endforeach
    </section>
@endsection

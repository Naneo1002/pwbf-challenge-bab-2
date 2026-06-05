@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <section class="mb-4">
        <p class="text-danger fw-semibold text-uppercase mb-2">Blog</p>
        <h1 class="display-6 fw-bold">Artikel inspiratif untuk pengembang Laravel</h1>
        <p class="text-muted">Daftar artikel dummy yang bisa kamu gunakan sebagai contoh konten blog.</p>
    </section>

    <section class="row g-4">
        @foreach ($artikel as $post)
            <article class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <p class="text-muted small mb-2">{{ $post['tanggal'] }}</p>
                        <h2 class="h5 fw-bold">{{ $post['judul'] }}</h2>
                        <p class="text-muted mb-0">{{ $post['ringkasan'] }}</p>
                    </div>
                </div>
            </article>
        @endforeach
    </section>
@endsection

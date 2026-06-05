{{-- File: resources/views/home.blade.php --}}

{{-- @extends menunjukkan layout mana yang digunakan --}}
@extends('layouts.app')

{{-- @section mengisi slot @yield('title') di layout --}}
@section('title', 'Beranda')

{{-- @section('content') mengisi slot @yield('content') di layout --}}
@section('content')
    {{-- Jumbotron / Hero Section --}}
    <div class="p-5 mb-4 bg-dark text-white rounded-3">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold text-danger">Melannexa</h1>
            <p class="col-md-8 fs-4">
                Kami membantu bisnis, startup, dan UMKM membangun website modern.
            </p>
            <a class="btn btn-danger btn-lg" href="{{ route('portofolio') }}" role="button">
                Lihat Portofolio →
            </a>
        </div>
    </div>

    {{-- Fitur Cards --}}
    <section>
        <h2 class="h4 fw-bold mb-3">3 Fitur Unggulan</h2>
        <div class="row g-4">
            @foreach ($fitur as $item)
                <div class="col-md-4">
                    <article class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="display-6 mb-2">{{ $item['icon'] }}</div>
                            <h3 class="h5 fw-bold">{{ $item['judul'] }}</h3>
                            <p class="text-muted mb-0">{{ $item['desc'] }}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </section>
@endsection

{{-- <x-alert type="success" message="Selamat datang di Laravel 13!" />
<x-alert type="warning" message="Ini adalah latihan Blade Component." />
<x-alert type="danger" message="Contoh alert error Bootstrap." /> --}}

{{-- Menambahkan CSS tambahan khusus untuk halaman ini --}}
@push('styles')
    <style>
        .card:hover { transform: translateY(-5px); transition: transform 0.3s ease; }
    </style>
@endpush

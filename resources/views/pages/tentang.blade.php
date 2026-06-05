@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')
    <section class="row g-4 align-items-center mb-5">
        <div class="col-lg-7">
            <p class="text-danger fw-semibold text-uppercase">Tentang Kami</p>
            <h1 class="display-5 fw-bold">Kami membangun web yang rapi, modern, dan mudah dipahami.</h1>
            <p class="lead text-muted">Tim kami fokus pada pengalaman pengguna, desain yang bersih, dan solusi digital yang siap dipakai untuk kebutuhan bisnis maupun pembelajaran.</p>
            <p>Website challenge ini dibuat sebagai contoh proyek Laravel yang menggabungkan layout seragam, navigasi yang jelas, serta halaman-halaman statis yang siap dikembangkan lebih lanjut.</p>
        </div>
        <div class="col-lg-5">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=80" class="card-img-top" alt="Tim bekerja bersama" style="height: 320px; object-fit: cover;">
            </div>
        </div>
    </section>

    <section>
        <h2 class="h4 fw-bold mb-3">Foto Tim</h2>
        <div class="row g-4">
            @foreach ($tim as $anggota)
                <div class="col-md-4">
                    <article class="card h-100 shadow-sm border-0 text-center">
                        <div class="card-body p-4">
                            <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-3" style="width: 88px; height: 88px; font-size: 2rem;">👩‍💻</div>
                            <h3 class="h5 fw-bold mb-1">{{ $anggota['nama'] }}</h3>
                            <p class="text-muted mb-0">{{ $anggota['peran'] }}</p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </section>
@endsection

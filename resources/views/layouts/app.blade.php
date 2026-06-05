<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- @yield('title') akan diisi oleh halaman turunan --}}
    <title>@yield('title', 'Aplikasi Laravel') | Melannexa</title>

    {{-- Vite akan mengelola aset CSS dan JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Slot untuk CSS tambahan khusus halaman tertentu --}}
    @stack('styles')

    <style>
        html, body {
            transition: background-color 0.35s ease, color 0.35s ease;
        }

        .card, .navbar, .alert, .form-control, .btn {
            transition: background-color 0.35s ease, color 0.35s ease, border-color 0.35s ease;
        }
    </style>
</head>
<body>
    {{-- ===== NAVIGASI ===== --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="{{ url('/') }}">
                🔴 Melannexa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portofolio') }}">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                    <li class="nav-item ms-2">
                        <button id="themeToggle" class="btn btn-outline-light btn-sm" type="button" aria-label="Toggle dark mode" aria-pressed="false">
                            <span class="theme-icon">🌙</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ===== KONTEN UTAMA ===== --}}
    <main class="container my-4">
        {{-- Flash message untuk notifikasi --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- @yield('content') akan diisi oleh konten halaman turunan --}}
        @yield('content')
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">
                &copy; {{ date('Y') }} Melannexa. All rights reserved.
            </p>
        </div>
    </footer>

    @push('scripts')
        <script>
            (function () {
                const STORAGE_KEY = 'website-theme';
                const root = document.documentElement;
                const toggle = document.getElementById('themeToggle');
                const icon = toggle ? toggle.querySelector('.theme-icon') : null;

                function applyTheme(theme) {
                    root.setAttribute('data-bs-theme', theme);
                    localStorage.setItem(STORAGE_KEY, theme);

                    if (toggle) {
                        toggle.setAttribute('aria-pressed', String(theme === 'dark'));
                        if (icon) icon.textContent = theme === 'dark' ? '☀️' : '🌙';
                    }
                }

                const savedTheme = localStorage.getItem(STORAGE_KEY);
                const preferredTheme = savedTheme || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

                applyTheme(preferredTheme);

                if (toggle) {
                    toggle.addEventListener('click', function () {
                        const nextTheme = root.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
                        applyTheme(nextTheme);
                    });
                }
            })();
        </script>
    @endpush

    {{-- Slot untuk JavaScript tambahan khusus halaman tertentu --}}
    @stack('scripts')
</body>
</html>

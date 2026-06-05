<?php
// File: routes/web.php

use Illuminate\Support\Facades\Route;

// Halaman Beranda
Route::get('/', function () {
    $fitur = [
        ['icon' => '🚀', 'judul' => 'Web Development', 'desc' => 'Pembuatan website yang cepat'],
        ['icon' => '🎨', 'judul' => 'UI/UX Design',     'desc' => 'Desain antarmuka yang menarik'],
        ['icon' => '🔧', 'judul' => 'Website Maintenance',   'desc' => 'Pemeliharaan performa website'],
    ];
    return view('pages.home', compact('fitur'));
})->name('home');

// Halaman Tentang
Route::get('/tentang', function () {
    $tim = [
        ['nama' => 'Ryan Gosling', 'peran' => 'CEO & Founder', 'foto' => 'ryan.jpg'],
        ['nama' => 'Tom Holland', 'peran' => 'UI/UX Designer', 'foto' => 'tom.jpg'],
        ['nama' => 'Fahmy', 'peran' => 'Marketing Specialist', 'foto' => 'fahmy.jpg'],
    ];

    return view('pages.tentang', compact('tim'));
})->name('tentang');

// Halaman Portofolio
Route::get('/portofolio', function () {
    $proyek = [
        ['judul' => 'Website Company Profile', 'kategori' => 'Web App', 'deskripsi' => 'Website profesional untuk perusahaan manufaktur.', 'warna' => 'danger'],
        ['judul' => 'Marketplace', 'kategori' => 'E-Commerce', 'deskripsi' => 'Platform jual beli sederhana untuk produk lokal.', 'warna' => 'primary'],
        ['judul' => 'Dashboard Management Inventaris', 'kategori' => 'Web App', 'deskripsi' => 'Sistem monitoring stok barang berbasis web.', 'warna' => 'danger'],
    ];

    return view('pages.portofolio', compact('proyek'));
})->name('portofolio');

// Halaman Blog
Route::get('/blog', function () {
    $artikel = [
        ['judul' => 'Memulai Laravel dengan Struktur yang Rapi', 'tanggal' => '5 Juni 2026', 'ringkasan' => 'Panduan cepat untuk membangun aplikasi Laravel yang bersih dan mudah dipelihara.'],
        ['judul' => 'Tips Mendesain UI yang Menarik dengan Bootstrap', 'tanggal' => '2 Juni 2026', 'ringkasan' => 'Prinsip sederhana agar tampilan website tetap modern dan nyaman dibaca.'],
        ['judul' => 'Mengoptimalkan Workflow dengan Blade dan Vite', 'tanggal' => '30 Mei 2026', 'ringkasan' => 'Cara menyederhanakan pengembangan frontend agar lebih produktif.'],
    ];

    return view('pages.blog', compact('artikel'));
})->name('blog');

// Halaman Kontak
Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');

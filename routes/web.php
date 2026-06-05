<?php
// File: routes/web.php

use Illuminate\Support\Facades\Route;

// Halaman Beranda
Route::get('/', function () {
    $fitur = [
        ['icon' => '🚀', 'judul' => 'MVC Architecture', 'desc' => 'Struktur kode yang rapi dan terorganisir'],
        ['icon' => '🗄️', 'judul' => 'Eloquent ORM',     'desc' => 'Akses database dengan cara yang elegan'],
        ['icon' => '🎨', 'judul' => 'Blade Template',   'desc' => 'Template engine yang powerful dan fleksibel'],
    ];
    return view('pages.home', compact('fitur'));
})->name('home');

// Halaman Tentang
Route::get('/tentang', function () {
    $tim = [
        ['nama' => 'Dina Budhi Utami, M.T.', 'peran' => 'Dosen Pengampu', 'foto' => null],
        ['nama' => 'Firayza',          'peran' => 'Asisten Lab',    'foto' => null],
        ['nama' => 'Fahmy',           'peran' => 'Asisten Lab',    'foto' => null],
    ];
    return view('pages.tentang', compact('tim'));
})->name('tentang');

// Halaman Portofolio
Route::get('/portofolio', function () {
    $proyek = [
        ['judul' => 'Dashboard Analytics', 'kategori' => 'Web App', 'deskripsi' => 'Panel admin interaktif untuk memantau performa bisnis.', 'warna' => 'danger'],
        ['judul' => 'Marketplace UMKM', 'kategori' => 'E-Commerce', 'deskripsi' => 'Platform jual beli sederhana untuk produk lokal.', 'warna' => 'primary'],
        ['judul' => 'Landing Page Brand', 'kategori' => 'Marketing', 'deskripsi' => 'Desain page promosi yang modern dan cepat dimuat.', 'warna' => 'success'],
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

@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <section class="row g-4 align-items-start">
        <div class="col-lg-5">
            <p class="text-danger fw-semibold text-uppercase mb-2">Kontak</p>
            <h1 class="display-6 fw-bold mb-3">Hubungi kami untuk kolaborasi atau pertanyaan.</h1>
            <p class="text-muted">Form di bawah ini hanya tampilan statis untuk latihan layout dan desain halaman kontak.</p>

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <p class="mb-1"><strong>Email:</strong> admin@laravel.test</p>
                    <p class="mb-1"><strong>Telepon:</strong> 0812-3456-7890</p>
                    <p class="mb-0"><strong>Alamat:</strong> Jakarta, Indonesia</p>
                </div>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="nama@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="4" placeholder="Tuliskan pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

# Identitas Mahasiswa
### Nama: Neo Sheyka Isnaeni
### NIM: 230102105
### Kelas: IF23B
### Mata Kuliah: Pemrograman Web Berbasis Framework
### Dosen Pengampu: Dina Budhi Utami S.kom., M.T.

# Daftar Component

### 1. <x-alert>
Komponen notifikasi dengan tipe `success`, `danger`, `warning`, dan `info`.

Contoh:

```blade
<x-alert type="success" message="Data berhasil disimpan." />

<x-alert type="warning">
    Harap cek kembali form sebelum dikirim.
</x-alert>
```

### 2. <x-card>
Komponen card dengan slot untuk judul, isi, dan footer.

Contoh:

```blade
<x-card title="Profil Pengguna" class="mb-4">
    Isi konten card berada di sini.

    <x-slot:footer>
        <x-button variant="outline">Edit Profil</x-button>
    </x-slot:footer>
</x-card>
```

### 3. <x-badge>
Komponen badge/label dengan warna yang dapat dikustomisasi.

Contoh:

```blade
<x-badge color="success">Aktif</x-badge>
<x-badge color="warning">Pending</x-badge>
<x-badge color="danger">Urgent</x-badge>
```

### 4. <x-button>
Komponen tombol dengan variant `primary`, `secondary`, dan `outline`.

Contoh:

```blade
<x-button variant="primary">Simpan</x-button>
<x-button variant="secondary">Batal</x-button>
<x-button variant="outline">Lihat Detail</x-button>
```

### 5. <x-breadcrumb>
Komponen breadcrumb navigasi untuk membantu pengguna memahami posisi halaman.

Contoh:

```blade
<x-breadcrumb :items="[
    ['label' => 'Beranda', 'url' => '/'],
    ['label' => 'Portofolio', 'url' => route('portofolio')],
    ['label' => 'Detail Project'],
]" />
```

## Tips Penggunaan

- Semua component berada di `resources/views/components/`.
- Anda dapat menambahkan kelas tambahan melalui atribut HTML seperti `class="mb-3"`.
- Komponen ini sudah menggunakan Bootstrap untuk tampilan yang konsisten.


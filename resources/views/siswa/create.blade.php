<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Siswa</h2>

    @if (session('admin_role') === 'admin')
        <form method="POST" action="{{ route('siswa.store') }}">
            @csrf
            <input type="text" name="nama" placeholder="Nama" required><br>
            <input type="number" name="tb" placeholder="Tinggi Badan (cm)" required><br>
            <input type="number" name="bb" placeholder="Berat Badan (kg)" required><br>
            <button type="submit">Simpan</button>
        </form>
    @else
        <p style="color: red;">Akses ditolak. Halaman ini hanya bisa diakses oleh admin.</p>
    @endif

</body>
</html>

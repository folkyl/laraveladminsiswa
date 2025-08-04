<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>Halo, {{ session('admin_username') }}</h2>
    
    <a href="{{ route('logout') }}">Logout</a>
    
    <h2>Daftar Siswa</h2>
    
    {{-- Tombol tambah siswa hanya untuk admin --}}
    @if (session('admin_role') === 'admin')
        <a href="{{ route('siswa.create') }}"><button>+ Tambah Siswa</button></a>
    @endif

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tinggi Badan</th>
                <th>Berat Badan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $i => $s)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->tb }} cm</td>
                <td>{{ $s->bb }} kg</td>
                <td>
                    @if (session('admin_role') === 'admin')
                        <a href="{{ route('siswa.edit', $s->id) }}">Edit</a>
                        <a href="{{ route('siswa.delete', $s->id) }}" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    @else
                        <span style="color: gray;">(Akses dibatasi)</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

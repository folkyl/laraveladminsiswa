<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <h2>Edit Siswa</h2>
    <form method="POST" action="{{ route('siswa.update', $siswa->id) }}">
    @csrf
        <input type="text" name="nama" value="{{ $siswa->nama }}" required><br>
        <input type="number" name="tb" value="{{ $siswa->tb }}"required><br>
        <input type="number" name="bb" required value="{{ $siswa->bb }}"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
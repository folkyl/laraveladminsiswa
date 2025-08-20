<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detil Konten</title>
</head>
<body>
    <h1>{{ $dataartikel->id }} {{ $dataartikel->judul }}</h1>
    <p>{{ $dataartikel->isi }}</p>
    <p>{{ $dataartikel->detil }}</p>
    <a href="{{ url('/') }}">Back</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
</head>
<body>
    <h2>Ini Halaman Landing Page</h2>
    <a href="{{ url('/login') }}">
        <button>Login di sini</button>
    </a>
    <a href="{{ url('/register') }}">
        <button>Register disini</button>
    </a>

    @foreach ($artikel as $a => $data)
        <a href="{{ url('/detil/'. $data->id) }}"> 
            <h1>{{ $data->id}} {{ $data->judul }}</h1>
        </a>
        <p>{{ $data->isi }}</p>
        <br>
    @endforeach
</body>
</html>
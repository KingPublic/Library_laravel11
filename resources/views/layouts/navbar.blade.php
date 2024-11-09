<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Perpustakaan</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('buku.index') }}">Tampilkan Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jurnal.index') }}">Tampilkan Jurnal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('koran.index') }}">Tampilkan Koran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cd.index') }}">Tampilkan CD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('skripsi.index') }}">Tampilkan Skripsi</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>

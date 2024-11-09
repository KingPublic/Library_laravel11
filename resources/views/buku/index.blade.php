<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head> 
<body>
@extends('layouts.navbar')

@section('content')
    <h1>Data Buku</h1>

    <!-- Link untuk sorting berdasarkan Title -->
    <a href="{{ route('buku.index', ['sort_by' => 'title', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">
        Urutkan berdasarkan Judul ({{ $order == 'asc' ? 'Menurun' : 'Menaik' }})
    </a>
    <br>

    <!-- Link untuk sorting berdasarkan Author -->
    <a href="{{ route('buku.index', ['sort_by' => 'author', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">
        Urutkan berdasarkan Penulis ({{ $order == 'asc' ? 'Menurun' : 'Menaik' }})
    </a>
    <br>

    <!-- Link untuk sorting berdasarkan Publisher -->
    <a href="{{ route('buku.index', ['sort_by' => 'publisher', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">
        Urutkan berdasarkan Penerbit ({{ $order == 'asc' ? 'Menurun' : 'Menaik' }})
    </a>
    <br>

    <!-- Link untuk sorting berdasarkan Publication Year -->
    <a href="{{ route('buku.index', ['sort_by' => 'publication_year', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">
        Urutkan berdasarkan Tahun Terbit ({{ $order == 'asc' ? 'Menurun' : 'Menaik' }})
    </a>
    <br>

    <!-- Link untuk sorting berdasarkan Pages -->
    <a href="{{ route('buku.index', ['sort_by' => 'pages', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">
        Urutkan berdasarkan Jumlah Halaman ({{ $order == 'asc' ? 'Menurun' : 'Menaik' }})
    </a>
    <br><br>

    <!-- Tampilkan daftar buku -->
    <ul>
        @foreach ($buku as $item)
            <li>
                <strong>Judul:</strong> {{ $item->title }}<br>
                <strong>Penulis:</strong> {{ $item->author }}<br>
                <strong>Penerbit:</strong> {{ $item->publisher }}<br>
                <strong>Tahun Terbit:</strong> {{ $item->publication_year }}<br>
                <strong>Jumlah Halaman:</strong> {{ $item->pages }}<br><br>
            </li>
        @endforeach
    </ul>
@endsection

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Koran</title>
</head>
<body>
@extends('layouts.navbar')

@section('content')
    <h1>Data Koran</h1>

    <!-- Sorting Link untuk Judul -->
    <a href="{{ route('koran.index', ['sort_by' => 'title', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">
        Urutkan berdasarkan Judul ({{ $order == 'asc' ? 'Menurun' : 'Menaik' }})
    </a>
    <br>

    <!-- Sorting Link untuk Penerbit -->
    <a href="{{ route('koran.index', ['sort_by' => 'publisher', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">
        Urutkan berdasarkan Penerbit ({{ $order == 'asc' ? 'Menurun' : 'Menaik' }})
    </a>
    <br>

    <!-- Sorting Link untuk Tanggal Terbit -->
    <a href="{{ route('koran.index', ['sort_by' => 'publication_date', 'order' => $order == 'asc' ? 'desc' : 'asc']) }}">
        Urutkan berdasarkan Tanggal Terbit ({{ $order == 'asc' ? 'Menurun' : 'Menaik' }})
    </a>

    <ul>
        @foreach ($koran as $item)
            <li>
                <strong>Judul:</strong> {{ $item->title }}<br>
                <strong>Penerbit:</strong> {{ $item->publisher }}<br>
                <strong>Tanggal Terbit:</strong> {{ $item->publication_date }}<br>
                <strong>Deskripsi:</strong> {{ $item->description }}<br><br>
            </li>
        @endforeach
    </ul>
@endsection
</body>
</html>

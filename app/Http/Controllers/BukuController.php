<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request)
    {
        // Ambil parameter 'sort_by' dan 'order' dari URL, defaultkan ke 'title' dan 'asc' jika tidak ada
        $sortBy = $request->input('sort_by', 'title');
        $order = $request->input('order', 'asc');

        // Ambil data buku dan sort berdasarkan kolom dan urutan yang diberikan
        $buku = Buku::orderBy($sortBy, $order)->get();

        // Kembalikan view dengan data buku yang sudah disortir
        return view('buku.index', compact('buku', 'sortBy', 'order'));
    }
}


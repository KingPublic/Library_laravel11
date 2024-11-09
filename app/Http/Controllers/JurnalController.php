<?php
namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index(Request $request)
    {
        // Ambil parameter 'sort_by' dan 'order' dari URL, defaultkan ke 'title' dan 'asc' jika tidak ada
        $sortBy = $request->input('sort_by', 'title'); // Kolom yang digunakan untuk sorting
        $order = $request->input('order', 'asc'); // Ascending atau descending

        // Ambil data jurnal dan sort berdasarkan kolom dan urutan yang diberikan
        $jurnal = Jurnal::orderBy($sortBy, $order)->get();

        // Kembalikan view dengan data jurnal yang sudah disortir
        return view('jurnal.index', compact('jurnal', 'sortBy', 'order'));
    }
}


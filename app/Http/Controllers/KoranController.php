<?php

namespace App\Http\Controllers;

use App\Models\Koran;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Koran;
use Illuminate\Http\Request;

class KoranController extends Controller
{
    public function index(Request $request)
    {
        $sortBy = $request->input('sort_by', 'title');
        $order = $request->input('order', 'asc');

        $koran = Koran::orderBy($sortBy, $order)->get();

        return view('koran.index', compact('koran', 'sortBy', 'order'));
    }
}



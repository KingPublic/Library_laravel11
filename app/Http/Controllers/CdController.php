<?php

namespace App\Http\Controllers;

use App\Models\Cd;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Cd;
use Illuminate\Http\Request;

class CdController extends Controller
{
    public function index(Request $request)
    {
        $sortBy = $request->input('sort_by', 'title');
        $order = $request->input('order', 'asc');

        $cd = Cd::orderBy($sortBy, $order)->get();

        return view('cd.index', compact('cd', 'sortBy', 'order'));
    }
}


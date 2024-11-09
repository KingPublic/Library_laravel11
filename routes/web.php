<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KoranController;
use App\Http\Controllers\CdController;
use App\Http\Controllers\SkripsiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.navbar');
    
});
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/jurnal', [JurnalController::class, 'index'])->name('jurnal.index');
Route::get('/koran', [KoranController::class, 'index'])->name('koran.index');
Route::get('/cd', [CdController::class, 'index'])->name('cd.index');
Route::get('/skripsi', [SkripsiController::class, 'index'])->name('skripsi.index');



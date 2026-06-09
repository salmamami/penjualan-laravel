<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/welcome', function () {
    echo "welcome";
});

Route::get('/index', function () {
    echo "Uji Coba route dengan method GET";
});

Route::get('/show/{id}', function ($id) {
    echo "Nilai Parameter Adalah " .$id;
});

Route::get('/show/{id?}', function ($id = 1) {
    echo "Nilai Parameter Adalah " .$id;
});

Route::get('edit/{nama}', function ($nama) {
    echo "Nilai Parameter Adalah ".$nama;
})->where('nama', '[A-Za-z]+');

Route::get('/index', function () {
    echo "<a href='".route('create')."'>Akses Route dengan nama</a>";
});

Route::get('/create', function () {
    echo "Route diakses menggunakan nama";
})->name('create');

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
Route::get('/produk/delete/{id}', [ProdukController::class, 'delete']);

Route::get('/halaman', function () {
    $title = 'Judul Halaman';
    $konten = 'Ini isi konten';
    return view('konten.halaman', compact('title', 'konten'));
});

Route::get('/pelanggan', [PelangganController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/kategori/store', [KategoriController::class, 'store']);

Route::get('/kategori/update', [KategoriController::class, 'update']);

Route::get('/kategori/delete', [KategoriController::class, 'delete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return "Halaman Dashboard";
})->middleware('auth');

Route::get('/cekuser', function () {
    return Auth::user();
});
<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarProdukController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/Beranda', function () {
//     return view('beranda');
// });

Route::get('/Beranda', [BerandaController::class , 'index']);
Route::get('/DaftarProduk', [DaftarProdukController::class , 'index']);
Route::get('/DetailProduk', [DetailProdukController::class , 'index']);
Route::get('/Admin', [ProductController::class , 'index'])->name('admin.dashboard');

Route::post('/Admin', [ProductController::class, 'store'])->name('savedata');

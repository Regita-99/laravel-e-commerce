<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarProdukController;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/Beranda', function () {
//     return view('beranda');
// });
Route::get('/DetailProduk/{id}', [DetailProdukController::class, 'show'])->name('detail');
Route::get('/', [BerandaController::class , 'index']);
Route::get('/DaftarProduk', [DaftarProdukController::class , 'index']);
Route::get('/DetailProduk', [DetailProdukController::class , 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth_login']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class,'logout']);
//middleware 
Route::group(['middleware' => 'useradmin'], function(){
    Route::get('/Admin', [ProductController::class , 'index'])->name('Admin');
    Route::post('/Admin', [ProductController::class, 'store'])->name('savedata');
    Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');
    Route::resource('products', ProductController::class);
});


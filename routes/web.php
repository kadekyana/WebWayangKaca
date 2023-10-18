<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', function () {
    return view('login');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/history', function () {
    return view('history');
});



Route::get('/', function () {
    return view('index');
});



Route::get('/login', [authController::class, 'login'])->name('Login');
Route::get('/register', [authController::class , 'register'])->name('Register');

// Admin Page -
Route::get('/admin', [adminController::class, 'index']);
Route::get('/products', [adminController::class, 'products']);
Route::get('/tambah_product', [adminController::class, 'tambah_product']);
Route::post('/tambah', [adminController::class, 'tambah']);
Route::delete('/product/{id}', [adminController::class, 'hapus']);
Route::get('/edit/{id}', [adminController::class , 'edit']);
Route::put('/edit/{id}/up', [adminController::class, 'up']);

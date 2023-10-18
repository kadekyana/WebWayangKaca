<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sandiController;
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




Route::get('/login', [authController::class, 'login'])->name('Login');
Route::get('/register', [authController::class , 'register'])->name('Register');

// Admin Page -
Route::get('/', [adminController::class, 'index']);
Route::get('/products', [adminController::class, 'products']);
Route::get('/tambah_product', [adminController::class, 'tambah_product']);
Route::post('/tambah', [adminController::class, 'tambah']);
Route::delete('/product/{id}', [adminController::class, 'hapus']);
Route::get('/edit/{id}', [adminController::class , 'edit']);
Route::put('/edit/{id}/up', [adminController::class, 'up']);

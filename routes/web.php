<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\userController;
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

// user 
Route::get('/detailProduct', [userController::class, 'detailProduct']);

// auth
Route::get('/', [userController::class, 'index']);
Route::get('/Product', [userController::class, 'productPage']);
Route::get('/History', [userController::class, 'historyPage']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [authController::class, 'login'])->name('Login');
    Route::post('/loginPost', [authController::class, 'loginPost'])->name('LoginPost');
    Route::get('/register', [authController::class , 'register'])->name('Register');
    Route::post('/registerPost', [authController::class , 'registerPost'])->name('RegisterPost');
    Route::delete('/logout', [authController::class, 'logout'])->name('Logout');
});

// Admin Page -
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [adminController::class, 'index']);
    Route::get('/users', [adminController::class, 'users']);
    Route::get('/products', [adminController::class, 'products']);
    Route::get('/tambah_product', [adminController::class, 'tambah_product']);
    Route::post('/tambah', [adminController::class, 'tambah']);
    Route::delete('/product/{id}', [adminController::class, 'hapus']);
    Route::get('/edit/{id}', [adminController::class , 'edit']);
    Route::put('/edit/{id}/up', [adminController::class, 'up']);
});

<?php

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


// Route::get('/', [sandiController::class, 'index']
//     );
<?php

use App\Http\Controllers\ApiAdminController;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/admin/index', [ApiAdminController::class, 'index']);
Route::get('/admin/users', [ApiAdminController::class, 'getUsers']);
Route::get('/admin/products', [ApiAdminController::class, 'getProducts']);
Route::post('/admin/products/create', [ApiAdminController::class, 'createProduct']);
Route::delete('/admin/users/{id}', [ApiAdminController::class, 'deleteUser']);
Route::delete('/admin/products/{id}', [ApiAdminController::class, 'deleteProduct']);
Route::put('/admin/products/{id}', [ApiAdminController::class, 'updateProduct']);

Route::post('/login', [ApiAuthController::class, 'loginPost']);
Route::post('/logout', [ApiAuthController::class, 'logout']);
Route::post('/register', [ApiAuthController::class, 'registerPost']);

Route::get('/detail-product/{id}', [ApiUserController::class, 'detailProduct']);
Route::post('/tambah-keranjang/{id}', [ApiUserController::class, 'tambahkeranjang']);
Route::get('/charts', [ApiUserController::class, 'charts']);
Route::delete('/hapus-cart/{id}', [ApiUserController::class, 'hapuscart']);
Route::post('/checkout', [ApiUserController::class, 'checkout']);
Route::get('/detail-check/{id}', [ApiUserController::class, 'detailCheck']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use App\Http\Controllers\ApiAdminController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

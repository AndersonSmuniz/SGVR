<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Api\UserController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Api\UserController::class, 'store'])->name('store');
    Route::get('/{user_id}', [\App\Http\Controllers\Api\UserController::class, 'show'])->name('show');
    Route::post('/{user_id}', [\App\Http\Controllers\Api\UserController::class, 'update'])->name('update');
    Route::delete('/{user_id}', [\App\Http\Controllers\Api\UserController::class, 'delete'])->name('delete');
});

Route::prefix('categoria')->name('categoria.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Api\CategoriaController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Api\CategoriaController::class, 'store'])->name('store');
    Route::get('/{user_id}', [\App\Http\Controllers\Api\CategoriaController::class, 'show'])->name('show');
    Route::post('/{user_id}', [\App\Http\Controllers\Api\CategoriaController::class, 'update'])->name('update');
    Route::delete('/{user_id}', [\App\Http\Controllers\Api\CategoriaController::class, 'delete'])->name('delete');
});

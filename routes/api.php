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

Route::prefix('conta')->name('conta.')->group(function (){
   Route::get('/', [\App\Http\Controllers\Api\ContaController::class, 'index'])->name('index');
   Route::post('/', [\App\Http\Controllers\Api\ContaController::class, 'store'])->name('store');
   Route::get('/{conta_id}', [\App\Http\Controllers\Api\ContaController::class, 'show'])->name('show');
   Route::post('/{conta_id}', [\App\Http\Controllers\Api\ContaController::class, 'update'])->name('update');
   Route::delete('/{conta_id}', [\App\Http\Controllers\Api\ContaController::class, 'delete'])->name('delete');
});

Route::prefix('mesa')->name('mesa.')->group(function (){
    Route::get('/', [\App\Http\Controllers\Api\MesaController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Api\MesaController::class, 'store'])->name('store');
    Route::get('/{mesa_id}', [\App\Http\Controllers\Api\MesaController::class, 'show'])->name('show');
    Route::post('/{mesa_id}', [\App\Http\Controllers\Api\MesaController::class, 'update'])->name('update');
    Route::delete('/{mesa_id}', [\App\Http\Controllers\Api\MesaController::class, 'delete'])->name('delete');
});
Route::prefix('cardapio')->name('cardapio.')->group(function (){
    Route::get('/', [\App\Http\Controllers\Api\CardapioController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\Api\CardapioController::class, 'store'])->name('store');
    Route::get('/{cardapio_id}', [\App\Http\Controllers\Api\CardapioController::class, 'show'])->name('show');
    Route::post('/{cardapio_id}', [\App\Http\Controllers\Api\CardapioController::class, 'update'])->name('update');
    Route::delete('/{cardapio_id}', [\App\Http\Controllers\Api\CardapioController::class, 'delete'])->name('delete');
});

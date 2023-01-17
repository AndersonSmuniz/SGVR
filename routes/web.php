<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos/listagem', [\App\Http\Controllers\ProdutoController::class, 'index'])->name('produto.index');
Route::get('categorias/listagem', [\App\Http\Controllers\CategoriaController::class, 'index'])->name('categoria.index');

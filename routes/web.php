<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('produtos', [ProdutoController::class, 'index']);
Route::get('produtos/create', [ProdutoController::class, 'create']);
Route::post('produtos', [ProdutoController::class, 'store']);
Route::get('produtos/{id}/edit', [ProdutoController::class, 'edit']);
Route::put('produtos/{id}', [ProdutoController::class, 'update']);
Route::delete('produtos/{id}', [ProdutoController::class, 'destroy']);


Route::get('categorias', [CategoriaController::class, 'index']);
Route::get('categorias/create', [CategoriaController::class, 'create']);
Route::post('categorias', [CategoriaController::class, 'store']);
Route::get('categorias/{id}/edit', [CategoriaController::class, 'edit']);
Route::put('categorias/{id}', [CategoriaController::class, 'update']);
Route::delete('categorias/{id}', [CategoriaController::class, 'destroy']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

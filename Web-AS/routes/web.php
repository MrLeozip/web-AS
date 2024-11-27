<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Livro', [LivroController::class, 'index']);
Route::get('Livro/create', [LivroController::class, 'create']);
Route::post('Livro', [LivroController::class, 'store']);
Route::get('Livro/{id}/edit', [LivroController::class, 'edit']);
Route::put('Livro/{id}', [LivroController::class, 'update']);
Route::delete('Livro/{id}', [LivroController::class, 'destroy']);
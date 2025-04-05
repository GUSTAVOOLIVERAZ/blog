<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// CATEGORIA
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

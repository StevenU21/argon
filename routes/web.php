<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //rutas de ejemplo sin controlador
    Route::get('/ejemplo/index', fn() => view('ejemplo.index'))->name('ejemplo.index');
    Route::get('/ejemplo/create', fn() => view('ejemplo.create'))->name('ejemplo.create');
    Route::get('/ejemplo/edit', fn() => view('ejemplo.edit'))->name('ejemplo.edit');
    Route::get('/ejemplo/show', fn() => view('ejemplo.show'))->name('ejemplo.show');
});

require __DIR__ . '/auth.php';

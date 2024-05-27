<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    //rutas de ejemplo sin controlador
    Route::get('/ejemplo/index', fn () => view('ejemplo.index'))->name('ejemplo.index');
    Route::get('/ejemplo/create', fn () => view('ejemplo.create'))->name('ejemplo.create');
    Route::get('/ejemplo/edit', fn () => view('ejemplo.edit'))->name('ejemplo.edit');
    Route::get('/ejemplo/show', fn () => view('ejemplo.show'))->name('ejemplo.show');

    //rutas de ejemplo sin controlador con prefijo
    // Route::prefix('/ejemplo')->group(function () {
    //     Route::get('/index', fn () => view('ejemplo.index'))->name('ejemplo.index');
    //     Route::get('/create', fn () => view('ejemplo.create'))->name('ejemplo.create');
    //     Route::get('/edit', fn () => view('ejemplo.edit'))->name('ejemplo.edit');
    //     Route::get('/show', fn () => view('ejemplo.show'))->name('ejemplo.show');
    // });

    //rutas de posts con controlador
    //hagamos un prefix para no repetir /posts en todas las rutas
    // Route::prefix('/posts')->group(function () {
    //     Route::get('/', [PostController::class, 'index'])->name('posts.index');
    //     Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    //     Route::post('/', [PostController::class, 'store'])->name('posts.store');
    //     Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    //     Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
    //     Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    //     Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
    // });

    //rutas sin prefijo
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

    //rutas de posts de tipo resource
    // Route::resource('/posts', PostController::class);
});

require __DIR__ . '/auth.php';

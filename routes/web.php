<?php

use App\Http\Controllers\Example\CategoryController;
use App\Http\Controllers\Example\PostController;
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
    // Route::get('/ejemplo/index', fn () => view('ejemplo.index'))->name('ejemplo.index');
    // Route::get('/ejemplo/create', fn () => view('ejemplo.create'))->name('ejemplo.create');
    // Route::get('/ejemplo/edit', fn () => view('ejemplo.edit'))->name('ejemplo.edit');
    // Route::get('/ejemplo/show', fn () => view('ejemplo.show'))->name('ejemplo.show');

    //rutas de ejemplo sin controlador con prefijo
    Route::prefix('/ejemplo')->group(function () {
        Route::get('/index', fn () => view('examples.ejemplo.index'))->name('ejemplo.index');
        Route::get('/create', fn () => view('examples.ejemplo.create'))->name('ejemplo.create');
        Route::get('/edit', fn () => view('examples.ejemplo.edit'))->name('ejemplo.edit');
        Route::get('/show', fn () => view('examples.ejemplo.show'))->name('ejemplo.show');
    });

    //rutas con controlador y prefix
    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
    });

    Route::prefix('/posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('/', [PostController::class, 'store'])->name('posts.store');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
        Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
    });

    Route::resource('/animals', \App\Http\Controllers\Example\AnimalController::class);

    //rutas sin prefijo
    // Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    // Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    // Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    // Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    // Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    // Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    // Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

    // Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    // Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    // Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    // Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    // Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    // Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    // Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

    //rutas de posts de tipo resource
    // Route::resource('/posts', PostController::class);
    // Route::resource('/categories', CategoryController::class);
});

require __DIR__ . '/auth.php';

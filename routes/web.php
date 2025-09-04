<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});


Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/auth', [App\Http\Controllers\AuthController::class, 'authenticate'])->name('auth');


Route::resource('books', App\Http\Controllers\BookController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::post('/user/{id}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('books.index');
    Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create'])->name('books.create');
    Route::post('/books/store', [App\Http\Controllers\BookController::class, 'store'])->name('books.store');
    Route::get('/books/{id}/edit', [App\Http\Controllers\BookController::class, 'edit'])->name('books.edit');
    Route::post('/books/{id}/update', [App\Http\Controllers\BookController::class, 'update'])->name('books.update');
    Route::delete('/books/{id}/destroy', [App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');
    Route::get('/books/{id}/download', [App\Http\Controllers\BookController::class, 'download'])->name('books.download');
    Route::get('/books/{id}/download', [App\Http\Controllers\BookController::class, 'download'])->name('books.download');
    // Additional routes for authenticated users can be added here
});

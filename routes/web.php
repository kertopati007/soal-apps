<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/auth', [App\Http\Controllers\AuthController::class, 'authenticate'])->name('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/user/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::post('/user/profile/update', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('user.profile.update');
    Route::post('/user/password/update', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('user.password.update');
    Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('books.index');
    Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create'])->name('books.create');
    Route::post('/books/store', [App\Http\Controllers\BookController::class, 'store'])->name('books.store');
    Route::get('/books/{id}/edit', [App\Http\Controllers\BookController::class, 'edit'])->name('books.edit');
    Route::post('/books/{id}/update', [App\Http\Controllers\BookController::class, 'update'])->name('books.update');
    Route::delete('/books/{id}/destroy', [App\Http\Controllers\BookController::class, 'destroy'])->name('books.destroy');

    // Additional routes for authenticated users can be added here
});

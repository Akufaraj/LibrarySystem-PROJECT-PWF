<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/books', [BookController::class, 'index'])
    ->name('books.index');

Route::get('/books/{id}', [BookController::class, 'show'])
    ->name('books.show');

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/members', [MemberController::class, 'index'])
    ->name('members.index');


// Route::get('books', function () {
//     // return ('Daftar Buku');
//     return view ('books.index');
// });

// Route::get('/books', [BookController::class, 'index']);
// Route::get('/books/{id}', [BookController::class, 'show']);

// Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/members', [MemberController::class, 'index']);



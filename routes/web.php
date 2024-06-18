<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

// role admin
Route::get('/admin/add-items', [BookController::class, 'index']);

Route::post('/admin/add-items', [BookController::class, 'addBook'])->name('addBook');

Route::get('/admin/manage-book', [BookController::class, 'showBookAdmin']);

Route::get('/admin/manage-book/edit/{id}', [BookController::class, 'showEditForm']);

Route::put('/admin/manage-book/edit/{id}', [BookController::class, 'editBook'])->name('updateBook');

Route::get('/admin/manage-book/delete/{id}', [BookController::class, 'deleteBook']);

Route::get('/admin/manage-user', [UserController::class, 'showUser']);

Route::get('/admin/manage-user/{id}', [UserController::class, 'deleteUser']);

// role member
Route::get('/register', [RegisterController::class, "index"]);

Route::post('/register', [RegisterController::class, "store"]);

Route::get('/login', [LoginController::class, 'index'])->name('login');


Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/', [BookController::class, 'showBook']);

Route::get('/borrow/{id}', [BorrowController::class, 'borrowForm'])->name('borrowForm');

Route::post('/borrow/{id}', [BorrowController::class, 'borrowBook']);

Route::get('/borrowed-books', [BorrowController::class, 'borrowedBook']);

Route::get('/return-book/{id}', [BorrowController::class, 'returnBook']);

Route::get('/admin', function () {
    return view('admin.dashboard-admin');
})->middleware(['auth']);

Route::get('/', [BookController::class, 'showBook'])->middleware(['auth']);
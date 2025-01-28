<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware('Auth')->group(function () {
    Route::get('/posts/view', [PostController::class, 'viewAllPosts'])->name('view.posts');

    Route::get('/posts/create', [PostController::class, 'showCreateForm'])->name('create.form');
    Route::post('/posts', [PostController::class, 'createNewPost'])->name('create.post');

    // wala pang crud

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// });

// Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
// });

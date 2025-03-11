<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'Home'])->name('dashboard');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth')->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->middleware('auth')->name('posts.store');
    Route::post('/register',[AuthController::class, 'register'])->name('register');
    Route::get('/create-account', [DashboardController::class, 'newAcc'])->name('dashboard')->name('register.form');
});

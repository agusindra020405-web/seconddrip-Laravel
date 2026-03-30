<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', [ProductController::class, 'landing']);

Route::get('/shop', [ProductController::class, 'shop'])->name('shop.index')->middleware('auth');

// Baris yang menghubungkan semua fungsi CRUD
Route::resource('/products', ProductController::class)
    ->middleware(['auth', 'admin']);

// autentifikasi
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

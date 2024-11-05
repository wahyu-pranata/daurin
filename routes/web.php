<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;

Route::get('/', function () {
    return view('welcome');
});

// Auth
Route::middleware(['guest'])->controller(AuthController::class)->group(function () {
    Route::get('/login', 'index');
});

// Admin
Route::middleware(['guest'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard']);
    Route::get('/pesanan', [AdminOrderController::class, 'index']);
    Route::get('/pesanan/detail', [AdminOrderController::class, 'detail']);
    Route::get('/barang', [ItemController::class, 'index']);
    Route::get('/notifikasi', [NotificationController::class, 'index']);
    Route::get('/profil', [AdminController::class, 'profil']);
    Route::get('/pengaturan', [AdminController::class, 'settings']);
});

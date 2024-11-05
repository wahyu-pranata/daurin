<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;

Route::get('/', function () {
    return view('user.landing-page');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User
Route::middleware(['guest'])->group(function () {
    Route::get('/orders/new', [OrderController::class, 'create']);
    Route::get('/orders', function () {
        return view("user.riwayat");
    });
});

// Admin
Route::middleware(['auth', 'can:is-agent'])->prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard']);
    Route::get('/pesanan', [AdminOrderController::class, 'index']);
    Route::get('/pesanan/detail', [AdminOrderController::class, 'detail']);
    Route::get('/barang', [ItemController::class, 'index']);
    Route::get('/notifikasi', [NotificationController::class, 'index']);
    Route::get('/profil', [AdminController::class, 'profil']);
    Route::get('/pengaturan', [AdminController::class, 'settings']);
});

require __DIR__ . '/auth.php';

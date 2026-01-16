<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Group Admin
Route::get('/admin', [PortfolioController::class, 'admin'])->name('admin');
Route::post('/admin/store', [PortfolioController::class, 'store'])->name('admin.store');

// Tambahkan Route Hapus INI:
Route::delete('/admin/delete/{id}', [PortfolioController::class, 'destroy'])->name('admin.destroy');
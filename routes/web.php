<?php

use App\Http\Controllers\PosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Dashboard');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/customer-display-screen', [PosController::class, 'customerDisplayIndex'])->name('customer-display-screen');
Route::get('/cashier-display-screen', [PosController::class, 'cashierDisplayIndex'])->name('cashier-display-screen');

require __DIR__ . '/auth.php';

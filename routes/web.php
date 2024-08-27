<?php

use App\Http\Controllers\CashierScreenController;
use App\Http\Controllers\CustomerScreenController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class, 'index'])->name('home');
Route::get('/drawer-session', [SessionController::class, 'index'])->name('session.index');
Route::post('/drawer-session', [SessionController::class, 'store'])->name('session.store');
Route::put('/drawer-session/{session}', [SessionController::class, 'update'])->name('session.update');

Route::get('/customer-display-screen/{session}', [CustomerScreenController::class, 'index'])->name('customer-display-screen');
Route::get('/cashier-display-screen/{session}', [CashierScreenController::class, 'index'])->name('cashier-display-screen');

require __DIR__ . '/auth.php';

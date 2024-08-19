<?php

use App\Http\Controllers\PosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [SessionController::class, 'index'])->name('home');
Route::get('/drawer-session', [SessionController::class, 'index'])->name('session.index');
Route::post('/drawer-session', [SessionController::class, 'store'])->name('session.store');
Route::put('/drawer-session/{session}', [SessionController::class, 'update'])->name('session.update');
Route::get('/customer-display-screen', [PosController::class, 'customerDisplayIndex'])->name('customer-display-screen');
Route::get('/cashier-display-screen', [PosController::class, 'cashierDisplayIndex'])->name('cashier-display-screen');

require __DIR__ . '/auth.php';

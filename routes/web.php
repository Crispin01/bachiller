<?php

use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\CuartoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InquilinosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('inquilinos', InquilinosController::class);

    Route::resource('cuartos', CuartoController::class);

    Route::resource('alquileres', AlquilerController::class);
});




require __DIR__.'/auth.php';

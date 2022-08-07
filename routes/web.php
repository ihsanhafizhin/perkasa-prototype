<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/', 'landing-page');

// Route::view('/dashboard', 'layouts.layout-dashboard');

Route::prefix('/login')->name('login.')->group(function() {
    Route::view('/', 'login')->name('view');
    Route::post('/', [AuthController::class, 'login'])->name('post');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    Route::view('/dashboard', 'rab_kegiatan')->name('dashboard');
});

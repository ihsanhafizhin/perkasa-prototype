<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/', 'landing-page');

Route::prefix('/login')->name('login.')->group(function() {
    Route::view('/', 'login')->name('view');
    Route::post('/', [AuthController::class, 'login'])->name('post');
});

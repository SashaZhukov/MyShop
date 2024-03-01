<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


Route::middleware(['role:admin|seller'])->prefix('admin')->group( function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin.home');
    Route::middleware(['role:admin'])->group(function () {
        Route::resource('users', UsersController::class);
    });
    Route::middleware(['role:seller'])->group(function () {

    });
});


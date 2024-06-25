<?php

use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;

Route::middleware(['role:admin|seller'])->prefix('admin')->group( function () {
    Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
});

Route::prefix('admin/PagesForAdmin')->group(function () {
    Route::resource('users', UsersController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('productsAdm',  ProductController::class);
});




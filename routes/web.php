<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::prefix('/currencies')->group(function () {
    Route::get('/choice', [CurrencyController::class, 'index'])->name('currencies.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/products')->group(function () {
    Route::get('/list', [ProductController::class, 'index'])->name('products.index');
    Route::get('/list/{product}', [ProductController::class, 'show'])->name('product.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/review/add/{product}', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');
});

require __DIR__.'/auth.php';
require __DIR__.'/administration.php';

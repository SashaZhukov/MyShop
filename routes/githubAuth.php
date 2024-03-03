<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialAuth\GitHubController;


Route::get('/github', [GitHubController::class, 'github'])->name('github.auth');
Route::get('/github/redirect', [GitHubController::class, 'githubRedirect'])->name('github.redirect');

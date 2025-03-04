<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route for the Article index
Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index']);
//Route to create and post a new Article
Route::get('/articles/create', [\App\Http\Controllers\ArticleController::class, 'create']);
Route::post('/articles', [\App\Http\Controllers\ArticleController::class, 'store']);
//Route for the Article show
Route::get('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'show']);
//Route to edit an article
Route::get('/articles/{article}/edit', [\App\Http\Controllers\ArticleController::class, 'edit']);
Route::put('/articles/{article}', [\App\Http\Controllers\ArticleController::class, 'update']);

//Route for the Auhtors index
Route::get('/authors', [\App\Http\Controllers\AuthorController::class, 'index']);
//Route for the Article show
Route::get('/authors/{author}', [\App\Http\Controllers\AuthorController::class, 'show']);



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

//Public Area of the Website
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('articles', \App\Http\Controllers\ArticleController::class)->only(['index', 'show']); ; 
Route::resource('authors', \App\Http\Controllers\AuthorController::class)->only(['index','show']);

//Logged In user Area of the Website
Route::prefix('/admin')->name('admin.')->middleware(['auth'])->group(function(){
    Route::get('/',\App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');
    Route::resource('articles', \App\Http\Controllers\Admin\ArticleController::class);
    Route::resource('keywords', \App\Http\Controllers\KeywordController::class)->except(['show']);
});






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

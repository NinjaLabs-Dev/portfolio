<?php

use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\ExperienceController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\TermsOfSaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/terms-of-sale', [TermsOfSaleController::class, 'index'])->name('terms-of-sale');

Route::domain('discord')->group(static function() {
    Route::redirect('/', 'https://discord.gg/FnNXxAn', 301);
});

Route::domain('github')->group(static function() {
    Route::redirect('/', 'https://github.com/NinjaLabs-Dev', 301);
});

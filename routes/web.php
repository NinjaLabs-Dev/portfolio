<?php

use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\ExperienceController;
use App\Http\Controllers\Pages\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::domain('discord')->group(static function() {
    Route::redirect('/', 'https://discord.gg/FnNXxAn', 301);
});

Route::domain('github')->group(static function() {
    Route::redirect('/', 'https://github.com/NinjaLabs-Dev', 301);
});

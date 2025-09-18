<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\GoogleController;

// Homepage Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'about'])->name('about');
Route::get('/layanan', [HomeController::class, 'services'])->name('services');
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');

// SEO Routes
Route::get('/sitemap.xml', function() {
    $content = '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . view('sitemap')->render();
    return response($content)->header('Content-Type', 'text/xml');
})->name('sitemap');

Route::get('/robots.txt', function() {
    return response()->view('robots')->header('Content-Type', 'text/plain');
})->name('robots');

// Legal Pages
Route::get('/privacy-policy', function() {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-service', function() {
    return view('terms-conditions');
})->name('terms-conditions');


// Google OAuth routes
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');
Route::post('/logout', [GoogleController::class, 'logout'])->name('logout');

// Profile route (protected)
Route::get('/profile', [GoogleController::class, 'profile'])->name('profile')->middleware('auth');

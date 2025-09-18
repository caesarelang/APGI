<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('legal.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-service', function() {
    return view('legal.terms-of-service');
})->name('terms-of-service');

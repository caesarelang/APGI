<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\SocialContentController;
use App\Http\Controllers\Admin\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

// Admin Authentication Routes
Route::middleware('guest:admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login']);
});

Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

// Admin Protected Routes
Route::middleware(['auth:admin'])->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.alt');
    
    // Profile Management
    Route::get('/profile', [AdminAuthController::class, 'showProfile'])->name('profile');
    Route::put('/profile', [AdminAuthController::class, 'updateProfile'])->name('profile.update');
    
    // Change Password
    Route::get('/change-password', [AdminAuthController::class, 'showChangePasswordForm'])->name('change-password');
    Route::post('/change-password', [AdminAuthController::class, 'changePassword'])->name('change-password.post');
    
    // Gallery Management
    Route::resource('galleries', GalleryController::class);
    
    // Event Management  
    Route::resource('events', EventController::class);
    
    // Social Content Management
    Route::resource('social-contents', SocialContentController::class);
    
    // News Management
    Route::resource('news', NewsController::class);
});
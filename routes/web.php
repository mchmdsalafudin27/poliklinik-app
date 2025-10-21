<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PoliController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard berdasarkan role
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    });
    
// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('polis', PoliController::class);
});


// Dokter Routes  
Route::middleware(['auth', 'role:dokter'])->group(function () {
    Route::get('/dokter/dashboard', function () {
        return view('dokter.dashboard');
    })->name('dokter.dashboard');
});
// Pasien Routes
Route::middleware(['auth', 'role:pasien'])->group(function () {
    Route::get('/pasien/dashboard', function () {
        return view('pasien.dashboard');
    })->name('pasien.dashboard');
    });
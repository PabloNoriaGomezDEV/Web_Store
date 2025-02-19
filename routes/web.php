<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;

// Ruta para el login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Ruta para el registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Ruta para el dashboard, con middleware de autenticación
Route::get('/dashboard', function () {
    return view('dashboard');  // Asegúrate de que esta vista exista en resources/views/dashboard.blade.php
})->middleware('auth');

// Ruta para logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


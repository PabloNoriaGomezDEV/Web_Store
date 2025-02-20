<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;

// Página principal
Route::get('/', function () {
    return view('welcome');
})->name('/');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Perfil del usuario
Route::get('/perfil', function () {
    return view('perfil');  // Asegúrate de que 'perfil.blade.php' existe en 'resources/views/'
})->middleware('auth')->name('perfil');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


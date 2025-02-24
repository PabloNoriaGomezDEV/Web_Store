<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;

// Página principal
use Illuminate\Support\Facades\Auth;

// Ruta para la página de bienvenida (cuando no está logueado)
Route::get('/', function () {
    return view('welcome');  // Muestra la vista 'welcome.blade.php'
})->name('welcome');  // Asegúrate de que esta ruta tenga un nombre 'welcome'

// Ruta para el login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Ruta para la página 'welcome2' después de login
Route::get('/welcome2', function () {
    return view('welcome2');  // Esta es la vista que verán los usuarios después de loguearse
})->middleware('auth')->name('welcome2');  // Solo accesible si el usuario está autenticado

// Ruta para logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


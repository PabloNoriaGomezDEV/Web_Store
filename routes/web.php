<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\WomanController;

// Página principal
use Illuminate\Support\Facades\Auth;

// Ruta para la página de bienvenida (cuando no está logueado)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Ruta para el login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Ruta para la página 'welcome2' después de login
Route::get('/welcome2', function () {
    return view('welcome2');
})->middleware('auth')->name('welcome2');

// Ruta para logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Ruta para mostrar la página de ajustes
Route::get('/settings', function () {
    return view('auth.settings');
})->middleware('auth')->name('settings');

// Ruta para actualizar un usuario (PATCH)
Route::patch('/users/{id}', [AuthController::class, 'update'])->middleware('auth')->name('users.update');

// Ruta para eliminar un usuario (DELETE)
Route::delete('/users/{id}', [AuthController::class, 'destroy'])->middleware('auth')->name('users.destroy');

Route::get('/ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');

//ruta para la pagina de hombre
Route::get('/man', function () {
    return view('man');
})->name('man');

// Ruta para la página de mujer
Route::get('/woman', [WomanController::class, 'index'])->name('woman');

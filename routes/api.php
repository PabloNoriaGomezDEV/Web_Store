<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users/{id}', [AuthController::class, 'show'])->name('users.show');

Route::patch('/users/{id}', [AuthController::class, 'update'])->name('users.update');

Route::delete('/users/{id}', [AuthController::class, 'destroy'])->name('users.destroy');

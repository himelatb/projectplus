<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers as _;
use App\Http\Controllers\MessageController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [_\AuthController::class, 'login'])->name('login');
    Route::get('/logout', [_\AuthController::class, 'logout'])->name('logout');
    Route::post('/login', [_\AuthController::class, 'loginAction']);
    Route::get('/register', [_\AuthController::class, 'register'])->name('register');
    Route::post('/register', [_\AuthController::class, 'registerAction']);
    Route::get('/{token}/verify', [_\AuthController::class, 'verify'])->name('verify');
});
Route::middleware('auth')->group(function () {
    Route::get('/', [_\AuthController::class, 'home'])->name('home');
    Route::get('/{user_id}/get-chat', [_\MessageController::class, 'getChat'])->name('getChat');
});

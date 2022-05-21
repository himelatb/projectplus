<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;



Route::get('/', [IndexController::class, 'indexpage'])->name('home');
Route::get('/about', [IndexController::class, 'aboutpage'])->name('about');
Route::get('/contact', [IndexController::class, 'contactpage'])->name('contact');

Route::post('/',[IndexController::class, 'LoginAction'])->name('LoginAction');

Route::middleware(['auth'])->group(function(){

    route::get('/page', [IndexController::class,'userAppointment'])->name('userAppointment');
});

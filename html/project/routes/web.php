<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContentController;

Auth::routes();

Route::get('/', [IndexController::class, 'indexpage'])->name('index');
Route::get('/about', [IndexController::class, 'aboutpage'])->name('about');
Route::get('/contact', [IndexController::class, 'contactpage'])->name('contact');
Route::post('/contact', [ContentController::class, 'adddata'])->name('contact');

Route::middleware(['auth'])->group(function(){
  Route::middleware(['rolLog'])->group(function(){
   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  });
});

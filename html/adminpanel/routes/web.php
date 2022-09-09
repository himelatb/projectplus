<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index'])->name('login');
Route::post('/',[HomeController::class,'login'])->name('login');


Route::middleware(['auth'])->group(function(){

  Route::middleware(['preventbacklog'])->group(function(){

      route::get('/home',[HomeController::class,'home'])->name('home');
      route::get('/logout',[HomeController::class,'logout'])->name('logout');
      route::post('/add',[HomeController::class,'add'])->name('add');
      route::get('/search',[HomeController::class,'search'])->name('search');
      route::get('{id}/delete',[HomeController::class,'delete'])->name('delete');
      route::get('{id}/update',[HomeController::class,'getstudent'])->name('update');
      route::post('{id}/update',[HomeController::class,'update'])->name('update');
});
});

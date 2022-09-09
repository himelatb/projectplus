<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogContentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [App\Http\Controllers\BlogContentController::class, 'index'])->name('index');
Route::get('{id}/detail', [App\Http\Controllers\BlogContentController::class, 'detailpage'])->name('detail');

Auth::routes();

route::middleware('auth')->group(function (){

          Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
          Route::get('{id}/delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
          Route::get('{id}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
          Route::post('{id}/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
          Route::post('/uploader', [App\Http\Controllers\HomeController::class, 'uploader'])->name('uploader');


});

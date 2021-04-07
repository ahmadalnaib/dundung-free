<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

//home
Route::get('/',[HomeController::class,'index'])->name('home');
//dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
//category
Route::resource('/category',CategoryController::class);

require __DIR__.'/auth.php';

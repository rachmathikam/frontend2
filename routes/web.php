<?php

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


Route::get('login', [App\Http\Controllers\LoginApiController::class, 'login'])->name('login');
Route::post('LoginApi', [App\Http\Controllers\LoginApiController::class, 'loginApi'])->name('loginApi');
Route::get('logout', [App\Http\Controllers\LoginApiController::class, 'logout'])->name('logout');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/guru', [App\Http\Controllers\FrontendController::class, 'index'])->name('guru');


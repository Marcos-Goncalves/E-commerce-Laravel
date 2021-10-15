<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/about', [HomeController::class, 'index'])->name('about');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class,'authenticate'])->name('auth');


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('reg');

Route::get('/teste',[HomeController::class, 'teste'])->name('teste')->middleware('auth');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
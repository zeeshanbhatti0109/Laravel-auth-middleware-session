<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('register','register')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

Route::view('login','login')->name('login');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch'); // Add this

Route::get('dashboard', [UserController::class, 'dashboardPage'])->name('dashboard'); // Add this
Route::post('logout', [UserController::class, 'logout'])->name('logout'); // Add this


<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// === GUEST ===
Route::view('/','welcome');

Route::get('/login', [LoginController::class,'login_request'])->middleware('guest')->name('login.request');

Route::post('/login', [LoginController::class,'login_response'])->middleware('guest')->name('login.response');

Route::get('/forgot-password', [NewPasswordController::class,'forgot_password'])->middleware('guest')->name('password.request');

Route::post('/forgot-password', [NewPasswordController::class,'send_email_reset_password'])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class,'edit_password'])->middleware('guest')->name('password.edit');

Route::post('/reset-password', [NewPasswordController::class,'update_password'])->middleware('guest')->name('password.update');

// === AUTH ===
Route::view('/dashboard','admin.dashboard')->middleware('auth')->name('dashboard');

Route::post('/logout', [LoginController::class,'logout'])->middleware('auth')->name('logout');

Route::resource('users', UserController::class)->middleware('auth')->names('users');

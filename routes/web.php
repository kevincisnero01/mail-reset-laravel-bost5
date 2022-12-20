<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login.request');

Route::post('/login', function (Request $request) {

    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8'
    ]);

    if(Auth::attempt($credentials)){
        return redirect()->route('dashboard')->with('status','Inicio de sessión con exito.');
    }

    return redirect()->route('login.request')->with('status','Las credenciales no concuerdan con nuestros registros.');

})->name('login.response');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {

    return view('auth.login');

})->middleware('guest')->name('login.request');

Route::post('/login', function (Request $request) {

    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8'
    ]);

    if(Auth::attempt($credentials)){
        $request->session()->regenerate();

        return redirect('dashboard')->with('status','Inicio de sessión con exito.');
    }

    return redirect()->route('login.request')->with('status','Las credenciales no concuerdan con nuestros registros.');

})->middleware('guest')->name('login.response');

// === AUTH ===
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::post('/logout', function(Request $request){

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');

})->middleware('auth')->name('logout');

Route::resource('users', UserController::class)->names('users');

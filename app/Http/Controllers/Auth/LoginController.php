<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login_request(Request $request)
    {
        return view('auth.login');
    }

    public function login_response(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect('dashboard')->with('status','Inicio de sessión con exito.');
        }

        return redirect()->route('login.request')->with('status','Las credenciales no concuerdan con nuestros registros.');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

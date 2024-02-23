<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public $registerForm=false;

    public function render()
    {
        return view('livewire.login-controller');
    }

    public function login(Request $request, Redirector $redirect){
        $credentials = $request->validate([
            'email' => ['required','email', 'string'],
            'password' => ['required','string']
        ]);

        $remember = $request->filled('remember');
        
        //Check if user and password exist in the database
        if(Auth::attempt($credentials, $remember)){
            //return redirect()->intended('/home') ->with('success', 'Inicio de sesión exitoso');
            $request->session()->regenerate();

            return redirect('home');
        }
        
            //Validation error
            throw ValidationException::withMessages([
                'email' => 'These credentials do not match our records'
            ]);
    }

    public function logout(Request $request, Redirector $redirect){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $redirect->to('/');
    }

}

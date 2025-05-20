<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

//retorna a la vista del inico de secion 
    public function showLogin()
    {
        return view('auth.login');
    }

//retorna a la vista del registro
    public function showRegister()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
//para autenticar el usuario
        if (Auth::attempt($credentials)) {
            return redirect()->route('inicio');
        }
//si falla lo dirije de nuevo al inicio con un mensaje de error
        return back()->withErrors(['email' => 'Correo o contraseña incorrectos.'])->withInput();
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed', 
                'regex:/[A-Z]/',     
                'regex:/[a-z]/',      
                'regex:/[0-9]/',      
                'regex:/[@$!%*?&]/'   
            ],
        ], [
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.regex' => 'La contraseña debe tener al menos una mayúscula, una minúscula, un número y un carácter especial.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        ]);
//si todo esta cprrecto crea el nuevo usuario en la base de datos con la contraseña encriptada
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
//inicia secion automaticamente
        Auth::login($user); 
        return redirect()->route('inicio');

       
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

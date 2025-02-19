<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Manejar el login
    public function login(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'email' => 'required|email',  // Validamos que el email sea un correo válido
            'password' => 'required|min:6',  // Validamos que la contraseña tenga al menos 6 caracteres
        ]);

        // Buscar al usuario en la base de datos por su correo electrónico
        $user = User::where('email', $request->email)->first();

        // Verificar si el usuario existe y la contraseña es correcta
        if ($user && Hash::check($request->password, $user->password)) {
            // Si la contraseña es correcta, iniciar sesión
            Auth::login($user);

            // Redirigir al dashboard
            return redirect()->route('dashboard');
        } else {
            // Si las credenciales son incorrectas, volver a mostrar el formulario con un mensaje de error
            return back()->withErrors(['email' => 'Correo o contraseña incorrectos.']);
        }
    }

    // Manejar el logout
    public function logout()
    {
        // Cerrar la sesión del usuario
        Auth::logout();

        // Redirigir al formulario de login
        return redirect()->route('login');
    }
}


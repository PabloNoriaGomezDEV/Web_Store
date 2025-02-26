<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Mostrar el formulario de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Manejar el registro de un nuevo usuario
    public function register(Request $request)
    {
        // Validación de los datos del formulario
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',  // confirmación de contraseña
        ]);

        // Si la validación falla, regresamos al formulario con los erroresº
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Crear un nuevo usuario
        $user = User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Cifrar la contraseña
        ]);

        // Iniciar sesión automáticamente después de registrarse
        Auth::login($user);

        // Redirigir a la página principal
        return redirect('/');
    }
}

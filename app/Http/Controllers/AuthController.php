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
            Auth::login($user);

            // Redirigir a la página de bienvenida después del login
            return redirect()->route('welcome2');
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

        // Redirigir a la página de bienvenida después de hacer logout
        return redirect()->route('welcome');
        return redirect()->route('/');
    }


public function show($id)
{
    $user = User::find($id);

    if ($user) {
        return response()->json($user, 200);
    } else {
        return response()->json(['message' => 'Usuario no encontrado'], 404);
    }
}

public function update(Request $request, $id)
{
    // Buscar el usuario por ID
    $user = User::find($id);

    // Si el usuario no existe, devolver un error 404
    if (!$user) {
        return response()->json(['message' => 'Usuario no encontrado'], 404);
    }

    // Validar los datos de entrada
    $request->validate([
        'name' => 'nullable|string|max:255',
        'email' => 'nullable|email|unique:users,email,' . $id,
        'password' => 'nullable|min:6',
    ]);

    // Actualizar solo los campos que han sido proporcionados
    if ($request->filled('name')) {
        $user->name = $request->name;
    }
    if ($request->filled('email')) {
        $user->email = $request->email;
    }
    if ($request->has('password') && $request->password !== null && $request->password !== '') {
        $user->password = Hash::make($request->password);
    }

    // Guardar los cambios en la base de datos
    $user->save();

    // Devolver una respuesta JSON con el usuario actualizado
    return redirect()->route('settings')->with('success', 'Datos actualizados correctamente.');
}

public function destroy($id)
{
    // Buscar el usuario por ID
    $user = User::find($id);

    // Si el usuario no existe, devolver un error 404
    if (!$user) {
        return response()->json(['message' => 'Usuario no encontrado'], 404);
    }

    // Eliminar el usuario
    $user->delete();

    // Devolver una respuesta JSON indicando que el usuario fue eliminado
    return redirect()->route('welcome')->with('success', 'Cuenta eliminada correctamente.');
}
}

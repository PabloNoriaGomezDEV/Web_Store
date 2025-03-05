<?php
namespace App\Http\Controllers;

use App\Models\User;  // Aquí cambiamos a 'User'
use Illuminate\Http\Request;

class ApiUsuarioController extends Controller
{
    // Mostrar todos los usuarios
    public function index()
    {
        $usuarios = User::all(); // Obtener todos los usuarios de la tabla 'users'
        return response()->json($usuarios, 200); // Devolver los usuarios en formato JSON
    }

    // Crear un nuevo usuario
    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'name' => 'required|string|max:255',  // El nombre de la columna en la tabla 'users' es 'name'
            'email' => 'required|email|unique:users,email',  // 'email' es único
            'password' => 'required|string|min:8',  // Contraseña mínima de 8 caracteres
        ]);

        // Crear el nuevo usuario
        $usuario = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),  // Encriptar la contraseña
        ]);

        return response()->json($usuario, 201); // Devuelve el usuario creado
    }

    // Mostrar un usuario específico
    public function show($id)
    {
        $usuario = User::find($id); // Buscar el usuario por ID
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
        return response()->json($usuario, 200); // Devolver el usuario en formato JSON
    }

    // Actualizar un usuario
    public function update(Request $request, $id)
    {
        $usuario = User::find($id); // Buscar el usuario por ID
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        // Validar los datos
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email,' . $id,
            'password' => 'sometimes|string|min:8',
        ]);

        // Si la contraseña está en los datos, la encriptamos
        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        }

        // Actualizar los campos del usuario
        $usuario->update($validated);
        return response()->json($usuario, 200); // Devolver el usuario actualizado
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $usuario = User::find($id); // Buscar el usuario por ID
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        // Eliminar el usuario
        $usuario->delete();
        return response()->json(['message' => 'Usuario eliminado'], 200); // Confirmar que fue eliminado
    }
}



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajustes de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/Auth.css') }}">
</head>
<body>
    <div class="container">
        <h1>Ajustes de Usuario</h1>

        <!-- Mostrar alerta si hay un mensaje flash -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulario para modificar datos -->
        <form id="updateForm" action="{{ route('users.update', Auth::user()->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }}">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}">
            </div>

            <div class="form-group">
                <label for="password">Nueva Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Dejar en blanco para no cambiar">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Datos</button>
        </form>

        <!-- Botón para borrar cuenta -->
        <form id="deleteForm" action="{{ route('users.destroy', Auth::user()->id) }}" method="POST" class="mt-4">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres borrar tu cuenta? Esta acción no se puede deshacer.')">Borrar Cuenta</button>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

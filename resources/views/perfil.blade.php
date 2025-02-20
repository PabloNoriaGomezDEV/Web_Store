<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #4A5535; 
        }
        .perfil-container {
            background: #C5D7A6;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
            text-align: left;
            width: 300px;
        }
        .perfil-container h1 {
            text-align: center;
        }
        .perfil-container p {
            margin: 10px 0;
            font-size: 18px;
        }
        .logout-button {
            display: block;
            width: 100%;
            background-color: red;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="perfil-container">
        <h1>Bienvenido</h1>
        
        <p><strong>Nombre:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Correo:</strong> {{ Auth::user()->email }}</p>

        <!-- Botón de cerrar sesión -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button">Cerrar sesión</button>
        </form>
    </div>
</body>
</html>

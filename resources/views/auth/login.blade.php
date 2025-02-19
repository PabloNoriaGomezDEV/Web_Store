<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">  <!-- Usamos asset() para los archivos públicos -->
    <title>Log In</title>
</head>
<body>
    <!-- Formulario de login con la ruta a la que se envían los datos -->
    <form id="loginForm" method="POST" action="{{ route('login') }}">  <!-- Usamos la ruta de login de Laravel -->
        @csrf  <!-- Token CSRF necesario para proteger el formulario -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Log In</button>
    </form>
</body>
</html>

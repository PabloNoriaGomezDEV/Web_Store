<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <title>Log In</title>
</head>
<body>
<img src="{{ asset('/images/logo.png') }}" alt="Logo" class="logo">
<video autoplay muted loop playsinline id="video-fondo">
<source src="https://res.cloudinary.com/dczjloaiy/video/upload/v1740409933/58374fbaa3c57b06bf47bee48df83343_pwmy61.mp4" type="video/mp4">
</video>
    <form id="loginForm" method="POST" action="{{ route('login') }}">
        @csrf 
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>

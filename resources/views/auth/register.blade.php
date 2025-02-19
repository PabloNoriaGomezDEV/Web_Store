<!-- resources/views/auth/register.blade.php -->

<form action="{{ route('register') }}" method="POST">
    @csrf  <!-- Directiva para CSRF -->

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ old('nombre') }}" required>

    <label for="email">Correo electrónico</label>
    <input type="email" name="email" value="{{ old('email') }}" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required>

    <label for="password_confirmation">Confirmar contraseña</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Registrar</button>

    <!-- Mostrar errores si los datos no son correctos -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>

<!-- resources/views/dashboard.blade.php -->

@if(Auth::check())
    <!-- Si el usuario está autenticado, mostramos el dashboard -->
    <h1>Bienvenido, {{ Auth::user()->email }}!</h1>

    <!-- Mostrar más información del usuario -->
    <p>Estás logueado como {{ Auth::user()->name }}.</p>

    <!-- Formulario de logout -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
@else
    <!-- Si el usuario no está autenticado, lo redirigimos al login -->
    <p>No estás logueado. Redirigiendo al login...</p>
    <script>window.location.href = "{{ route('login') }}";</script>
@endif

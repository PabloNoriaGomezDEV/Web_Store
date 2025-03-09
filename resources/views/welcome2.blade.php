<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantium</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">

<header class="position-absolute top-0 start-0 w-100 bg-transparent z-3">
    <div class="container-fluid d-flex justify-content-between align-items-center py-2 position-relative">
        <button id="menuButton" class="border-0 bg-transparent fs-3 text-white">&#8801;</button>

        <div id="logoContainer" class="position-absolute start-50 top-50 translate-middle">
            <img src="images/logo.png" alt="Logo" class="invert">
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="position-relative">
                <input type="text" class="ps-4 form-control rounded-pill bg-transparent text-white border-white"
                       placeholder="Buscar">
                <i class="bi bi-search position-absolute top-50 start-10 translate-middle-y ms-2 text-white"></i>
            </div>

            <!-- Botón de Usuario con Menú Desplegable -->
            <div class="position-relative">
                <a href="#" id="userDropdownBtn" class="d-flex align-items-center text-decoration-none">
                    <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1739971314/gznjtlxxi85egaud6nn2.png"
                         alt="User Icon" class="rounded-circle" width="25" height="25">
                </a>

                <!-- Menú Desplegable de Usuario -->
                <div id="userDropdown" class="position-absolute end-0 bg-white text-dark p-3 rounded shadow-lg d-none"
                     style="width: 220px; top: 40px; z-index: 1000;">
                    <p class="mb-2 fw-bold">Bienvenido, {{ Auth::user()->name }}</p>
                    <hr>
                    <a href="{{ route('settings') }}" class="btn btn-outline-primary w-100 mb-2">Ajustes de Usuario</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Cerrar sesión</button>
                    </form>
                </div>
            </div>

            <a href="#" class="d-flex align-items-center">
                <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1740086514/mce5ls7dlxyomtongzqc.png"
                     alt="Shopping Bag" width="40" height="35">
            </a>
        </div>
    </div>
</header>

<!-- Sección Principal -->
<section class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-md-6 position-relative">
            <a href="#">
                <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1740163190/xzbnebsbphonab9ivpza.png"
                     alt="mujer" class="img-fluid vh-100 w-100 object-fit-cover">
                <div class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-1 text-uppercase">
                    Mujer
                </div>
            </a>
        </div>
        <div class="col-md-6 position-relative">
            <a href="#">
                <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1740163151/muhu5lxkws3tl4u3rr7u.png"
                     alt="hombre" class="img-fluid vh-100 w-100 object-fit-cover">
                <div class="position-absolute top-50 start-50 translate-middle text-white fw-bold fs-1 text-uppercase">
                    Hombre
                </div>
            </a>
        </div>
    </div>
</section>

<footer class="bg-white text-secondary text-center py-4 mt-auto">  
    <div class="container-fluid px-3">
        <div class="row justify-content-end align-items-center">
            <div class="col-12 col-md-6 text-md-end text-center">
                <div class="map-container mb-3">
                    <iframe
                        class="w-100 w-md-70"
                        height="200"
                        style="border:0; border-radius:10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799194744!2d-74.25987594871906!3d40.6976700636988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250b20f1c64a3%3A0x4b4f5e2a6b6d6f6!2sNew%20York%2C%20EE.%20UU.!5e0!3m2!1ses!2s!4v1645481202864!5m2!1ses!2s">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-4 mb-3 mb-md-0">
                <p class="fw-bold">¡Síguenos!</p>
                <div class="d-flex justify-content-center justify-content-md-start gap-3">
                    <a href="#" class="text-secondary"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-secondary"><i class="bi bi-github"></i></a>
                    <a href="#" class="text-secondary"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="text-secondary"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-3 mb-md-0 text-center">
                <img src="images/logo.png" alt="Logo" width="100">
            </div>
            <div class="col-12 col-md-4 text-md-end">
                <p>&copy; 2025 Quantium. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>





<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script para el Desplegable -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownBtn = document.getElementById("userDropdownBtn");
        const dropdownMenu = document.getElementById("userDropdown");

        dropdownBtn.addEventListener("click", function(event) {
            event.preventDefault();
            dropdownMenu.classList.toggle("d-none");
        });

        // Cerrar el menú si se hace clic fuera
        document.addEventListener("click", function(event) {
            if (!dropdownBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add("d-none");
            }
        });
    });
</script>

</body>
</html>


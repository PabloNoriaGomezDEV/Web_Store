<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ropa Mujer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #4a5232;
            color: white;
        }
        .product-card {
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header class="position-absolute top-0 start-0 w-100 bg-transparent z-3">
        <div class="container-fluid d-flex justify-content-between align-items-center py-2 position-relative">
            <!-- Botón de menú -->
            <button id="menuButton" class="border-0 bg-transparent fs-3 text-white">≡</button>
            <div id="menuDropdown" class="d-none position-absolute bg-white border rounded shadow p-3"
                 style="top: 40px; left: 0; z-index: 1050;">
                 <ul class="list-unstyled mb-0">
                    <li class="fw-bold mb-2">HOMBRE</li>
                    <li class="mb-2"><a href="{{ route('man') }}" class="text-decoration-none text-dark">Ropa</a></li>
                    <li class="mb-2"><a href="{{ route('man') }}" class="text-decoration-none text-dark">Accesorios</a></li>
                    <li class="mb-2"><a href="{{ route('man') }}" class="text-decoration-none text-dark">Calzado</a></li>
                    <li class="mb-2"><a href="{{ route('man') }}" class="text-decoration-none text-dark">Colección</a></li>
                    <li><a href="{{ route('man') }}" class="text-decoration-none text-danger">Ofertas</a></li>
                    <br>
                    <li class="fw-bold mb-2">MUJER</li>
                    <li class="mb-2"><a href="{{ route('woman') }}" class="text-decoration-none text-dark">Ropa</a></li>
                    <li class="mb-2"><a href="{{ route('woman') }}" class="text-decoration-none text-dark">Accesorios</a></li>
                    <li class="mb-2"><a href="{{ route('woman') }}" class="text-decoration-none text-dark">Calzado</a></li>
                    <li class="mb-2"><a href="{{ route('woman') }}" class="text-decoration-none text-dark">Colección</a></li>
                    <li><a href="#" class="text-decoration-none text-danger">Ofertas</a></li>
                </ul>
            </div>

            <!-- Logo -->
            <div id="logoContainer" class="position-absolute start-50 top-50 translate-middle">
                <a href="{{ route('welcome2') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="invert">
                </a>
            </div>

            <!-- Controles de usuario -->
            <div class="d-flex align-items-center gap-3">
                <!-- Barra de búsqueda -->
                <div class="position-relative">
                    <input type="text" class="ps-4 form-control rounded-pill bg-transparent text-white border-white"
                           placeholder="Buscar">
                    <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-2 text-white"></i>
                </div>

                <!-- Botón de Usuario con Menú Desplegable -->
                <div class="position-relative">
                    <a href="#" id="userDropdownBtn" class="d-flex align-items-center text-decoration-none">
                        <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1739971314/gznjtlxxi85egaud6nn2.png"
                             alt="User Icon" class="rounded-circle" width="25" height="25">
                    </a>

                    <!-- Menú Desplegable de Usuario -->
                    <div id="userDropdown" class="position-absolute end-0 bg-white text-dark p-3 rounded shadow-lg d-none"
                         style="width: 220px; top: 40px; z-index: 1050;">
                        <p class="mb-2 fw-bold">Bienvenido, {{ Auth::user()->name }}</p>
                        <hr>
                        <a href="{{ route('settings') }}" class="btn btn-light w-100 mb-2">Ajustes de Usuario</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger w-100">Cerrar sesión</button>
                        </form>
                    </div>
                </div>

                <!-- Carrito de compras -->
                <a href="#" class="d-flex align-items-center">
                    <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1740086514/mce5ls7dlxyomtongzqc.png"
                         alt="Shopping Bag" width="40" height="35">
                </a>
            </div>
        </div>
    </header>

    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4">Ropa Mujer</h2>
        <div class="d-flex justify-content-center mb-3">
            <a href="#" class="text-white mx-2">Ver Todo</a>
            <a href="#" class="text-white mx-2">Camisetas</a>
            <a href="#" class="text-white mx-2">Sudaderas</a>
            <a href="#" class="text-white mx-2">Pantalones</a>
            <a href="#" class="text-white mx-2">Abrigos</a>
        </div>

        <div class="row">
            @foreach($productos as $producto)
            <div class="col-md-3 mb-4">
                <div class="product-card text-dark">
                    <img src="{{ $producto->imagen }}" class="img-fluid" alt="{{ $producto->nombre }}">
                    <h5 class="mt-2">{{ $producto->nombre }}</h5>
                    <p>{{ $producto->precio }} €</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

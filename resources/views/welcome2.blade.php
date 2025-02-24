<!DOCTYPE html>
<html lang="en">
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
            <button id="menuButton" class="border-0 bg-transparent fs-3 text-white">≡</button>
            <div id="menuDropdown" class="d-none position-absolute bg-white border rounded shadow">
                <ul class="list-unstyled mb-0 p-3">
                    <li class="fw-bold mb-2">MAN</li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Clothing</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Accessories</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Shoes</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Collection</a></li>
                    <li><a href="#" class="text-decoration-none text-danger">Sales</a></li>
                    <br>
                    <li class="fw-bold mb-2">WOMAN</li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Clothing</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Accessories</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Shoes</a></li>
                    <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Collection</a></li>
                    <li><a href="#" class="text-decoration-none text-danger">Sales</a></li>
                </ul>
            </div>
            
            <div id="logoContainer" class="position-absolute start-50 top-50 translate-middle">
                <img src="images/logo.png" alt="Logo" class="invert">
            </div>

            <div class="d-flex align-items-center">
                @auth
                    <div class="d-flex align-items-center">
                        <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1739971314/gznjtlxxi85egaud6nn2.png" 
                             alt="User Icon" class="rounded-circle" width="25" height="25">
                        <span class="ms-2 text-white">Bienvenido, {{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="ms-3">
                            @csrf
                            <button type="submit" class="btn btn-outline-light btn-sm">Log Out</button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </header>

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
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-start ps-2">
                    <p class="fw-bold">Follow us!</p>
                    <div class="d-flex gap-4">
                        <a href="#" class="text-secondary"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-secondary"><i class="bi bi-github"></i></a>
                        <a href="#" class="text-secondary"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="text-secondary"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <p>&copy; 2025 Quantium. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-4 text-end pe-2">
                    <img src="images/logo.png" alt="Logo" width="100">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
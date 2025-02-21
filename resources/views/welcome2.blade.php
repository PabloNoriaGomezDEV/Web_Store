<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <div class="container-fluid d-flex justify-content-between align-items-center py-2">
        <button id="menuButton" class="border-0 bg-transparent fs-3">≡</button>
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
            <div id="logoContainer">
                <img src="images/logo.png" alt="Logo">
            </div>
            <div class="d-flex align-items-center">
                @auth
                    <div class="d-flex align-items-center">
                        <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1739971314/gznjtlxxi85egaud6nn2.png" 
                             alt="User Icon" class="rounded-circle" width="25" height="25">
                        <span class="ms-2">Bienvenido, {{ Auth::user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="ms-3">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">Log Out</button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </header>

    <section class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-0">
                <a href="#">
                    <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1740089295/jf5g0kx78gwdxpstccdr.png" alt="mujer" class="img-fluid h-75 w-100 d-flex justify-content-center align-items-center">
                </a>
            </div>
            <div class="col-md-6 p-0">
                <a href="#">
                    <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1740089446/fugegcywk0jsa5fgbzkr.png" alt="hombre" class="img-fluid h-75 w-100 d-flex justify-content-center align-items-center">
                </a>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <h2 class="text-center mb-4"> Top Sellers</h2>
        <div id="bestSellersCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1739969823/hombre/uiiougwxerzkhbug0kca.png" class="card-img-top" alt="Producto 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Sudadera Hombre Marron Oversize</h5>
                                <p class="card-text">25.99 €</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1739969841/mujer/ipsjkoskt5sp5y8z6sv5.png"class="card-img-top" alt="Producto 2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Pantalon Mujer Negro Campana</h5>
                                <p class="card-text">29.99 €</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1739969841/mujer/dsz5oq5kuiniqhj9bg1t.png" class="card-img-top" alt="Producto 3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Botines Mujer Beige Deportivos</h5>
                                <p class="card-text">24.99 €</p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#bestSellersCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bestSellersCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Clothing Store. All Rights Reserved.</p>
        <p><a href="mailto:contact@clothingstore.com" class="text-white">Contact Us</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container-fluid d-flex justify-content-between align-items-center py-2">
            <button id="menuButton" class="btn btn-outline-secondary">≣</button>
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
                    <!-- Si el usuario está autenticado -->
                    <div class="d-flex align-items-center">
                        <img src="https://res.cloudinary.com/di069qlwi/image/upload/v1739971314/gznjtlxxi85egaud6nn2.png" alt="User Icon" class="rounded-circle" width="30" height="30">
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

    <!-- Hero Section -->
    <section class="hero">
        <div>
            <h1>Welcome to Our Clothing Store</h1>
            <p>Find the best deals on fashion for men and women</p>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="category-title">Men's Fashion</div>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-dark">Clothing</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Accessories</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Shoes</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Collection</a></li>
                </ul>
            </div>
            <div class="col-md-6 mb-4">
                <div class="category-title">Women's Fashion</div>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none text-dark">Clothing</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Accessories</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Shoes</a></li>
                    <li><a href="#" class="text-decoration-none text-dark">Collection</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="product-card">
                    <img src="images/product1.jpg" alt="Product 1">
                    <div class="product-card-body">
                        <h5>Men's Shirt</h5>
                        <p>$29.99</p>
                        <a href="#" class="btn btn-primary btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-card">
                    <img src="images/product2.jpg" alt="Product 2">
                    <div class="product-card-body">
                        <h5>Women's Dress</h5>
                        <p>$49.99</p>
                        <a href="#" class="btn btn-primary btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-card">
                    <img src="images/product3.jpg" alt="Product 3">
                    <div class="product-card-body">
                        <h5>Men's Jacket</h5>
                        <p>$79.99</p>
                        <a href="#" class="btn btn-primary btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="product-card">
                    <img src="images/product4.jpg" alt="Product 4">
                    <div class="product-card-body">
                        <h5>Women's Shoes</h5>
                        <p>$59.99</p>
                        <a href="#" class="btn btn-primary btn-sm">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Clothing Store. All Rights Reserved.</p>
        <p><a href="mailto:contact@clothingstore.com" class="text-white">Contact Us</a></p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

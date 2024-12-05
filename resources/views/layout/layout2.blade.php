<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    </head>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <img src="{{ asset('img/logo.png') }}" alt="" height="50px" width="auto">
            <a class="navbar-brand" href="">Studio Lalapan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('menu') }}">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                        data-bs-target="#myModal">
                        Cart <span class="badge bg-dark text-white ms-1 rounded-pill">0</span></button>

                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Header Modal -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <!-- Body Modal -->
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('posts.store') }}" class="p-3">
                                        @csrf
                                        <h3>Formulir Pesanan</h3>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama Pemesan</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Nomor Telepon/WhatsApp </label>
                                            <input type="tel" class="form-control" id="phone" name="phone"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Alamat Lengkap</label>
                                            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="product" class="form-label">Produk yang Dipesan</label>
                                            <select class="form-select" id="product" name="product" required>
                                                <option value="Ayam Goreng">Ayam Goreng</option>
                                                <option value="Bebek Goreng">Bebek Goreng</option>
                                                <option value="Lele Goreng">Lele Goreng</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="quantity" class="form-label">Jumlah</label>
                                            <input type="number" class="form-control" id="quantity"
                                                name="quantity" min="1" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="notes" class="form-label">Catatan Pesanan</label>
                                            <textarea class="form-control" id="notes" name="notes" rows="2"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="payment" class="form-label">Metode Pembayaran</label>
                                            <select class="form-select" id="payment" name="payment" required>
                                                <option value="COD">Tunai (COD)</option>
                                                <option value="Transfer Bank">Transfer Bank</option>
                                                <option value="E-Wallet">E-Wallet (Gopay, OVO, DANA)</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer
        style="background-color: #333; color: #fff; padding: 20px; text-align: center; font-family: Arial, sans-serif;">
        <div style="margin-bottom: 15px;">
            <p style="margin: 0;">Contact us: <a href="mailto:email@domain.com"
                    style="color: #00aaff; text-decoration: none;">studiolalapam@email.com</a> | Phone: +62
                851-5965-0700</p>
        </div>
        <div style="margin-bottom: 15px;">
            <a href="https://facebook.com" target="_blank" style="margin: 0 10px;"
                class="link-offset-2 link-underline link-underline-opacity-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                    alt="Facebook" width="24" height="24">
            </a>
            <a href="https://twitter.com" target="_blank" style="margin: 0 10px;"
                class="link-offset-2 link-underline link-underline-opacity-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/X_logo_2023.svg" alt="Twitter"
                    width="24" height="24">
            </a>
            <a href="https://instagram.com" target="_blank" style="margin: 0 10px;"
                class="link-offset-2 link-underline link-underline-opacity-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"
                    width="24" height="24">
            </a>
            <a href="https://linkedin.com" target="_blank" style="margin: 0 10px;"
                class="link-offset-2 link-underline link-underline-opacity-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e9/Linkedin_icon.svg" alt="LinkedIn"
                    width="24" height="24">
            </a>
        </div>
        <div>
            <p style="margin: 0;">&copy; 2024 Studio Lalapan. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

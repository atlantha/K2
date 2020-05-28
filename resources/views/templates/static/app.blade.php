<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/k2-logo-window.png" type="image/x-icon">
    <title>K2 BUKAN IT | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header id="header" class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/k2-logo-document.png" alt="logo-head"
                        class="logo-head"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item @yield('home_active')">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item @yield('about_active')">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item @yield('products_active')">
                            <a class="nav-link" href="{{ route('products') }}">Products</a>
                        </li>
                        <li class="nav-item @yield('services_active')">
                            <a class="nav-link" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item @yield('client_active')">
                        <a class="nav-link" href="{{ route('client') }}">Our Client</a>
                        </li>
                        <li class="nav-item @yield('contact_active')">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav social-media-section">
                        <li class="nav-item">
                            <div class="social-media rounded-circle">
                                <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="social-media rounded-circle">
                                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="social-media rounded-circle">
                                <a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="social-media rounded-circle">
                                <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="jumbotron">
    @yield('jumbotron')
    </section>
    <section id="content">
    @yield('content')
    </section>
    @yield('ex-content')
    <footer id="footer" class="footer bg-primary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 mt-3">
                    <a href="#" class="footer-logo">
                        <img src="/img/k2-logo-document.png" alt="footer-logo" class="logo-footer">
                    </a>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 mt-3">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <ul class="list-group"> 
                                <li class="list-group-item">
                                    <h5>Address</h5>
                                </li>
                                <li class="list-group-item">
                                    <p>
                                        Exclusive Commercial Radin Inten
                                        Jl. Raden Inten II No.80, RT.2/RW.7,
                                        Cipondoh, Kota Tangerang 15520
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5>Support</h5>
                                </li>
                                <li class="list-group-item">
                                    <div class="social-media rounded-circle">
                                        <a class="nav-link" href="#"><i class="fas fa-mobile"></i></a>
                                    </div>
                                    <span class="ml-1">082179099557</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5>Social</h5>
                                </li>
                                <li class="list-group-item">
                                    <div class="social-media rounded-circle">
                                        <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                    <div class="social-media rounded-circle">
                                        <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="social-media rounded-circle">
                                        <a class="nav-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <div class="social-media rounded-circle">
                                        <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <hr>
                </div>
            </div>
        </div>
    </footer>
    <div class="to-top">
        <a href="#header">top</a>
    </div>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
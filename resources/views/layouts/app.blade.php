<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal Resume</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="{{ route('home') }}"><span class="fw-bolder text-primary">SAMIN YASAR
                    </span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('resume') ? 'active' : '' }}"
                                href="{{ route('resume') }}">Resume</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}"
                                href="{{ route('projects') }}">Projects</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')

        <footer class=" bg-dark text-white py-4 mt-5">
            <div class="container  ">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Location </h4>
                        <p>house#1, Road#2 <br> Block#A, Mirpur-1 <br> Dhaka-1216</p>
                        <p></p>
                        <iframe class="img-fluid rounded-4 "
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14602.702490576647!2d90.35385844999999!3d23.794562699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e96fce29dd%3A0x6ccd9e51aba9e64d!2zTWlycHVyLTEsIOCmouCmvuCmleCmvg!5e0!3m2!1sbn!2sbd!4v1747043326749!5m2!1sbn!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>




                    </div>
                    <div class="col-md-4">
                        <h5>Contact Us</h5>
                        <p>Email:+8801525251


                        </p>
                    </div>
                    <div class="col-md-4">
                        <h5>Follow Us</h5>
                        <a class="btn btn-primary" href="https://www.facebook.com/ahsamin.yasar.9">Facebook</a>
                        <p>Copyright © Samin Yasar-2025</p>


                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

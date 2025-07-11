<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CPI - Chattogram Polytechnic Institute</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="{{ asset('frontend/assets/img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">
    @stack('css')
    <style>
        .navbar-toggler:focus{
            box-shadow: none;
        }
    </style>
</head>

<body>
    <header>
        <!-- Topbar Start -->
        <div class="container-fluid bg-dark">
            <div class="row py-2 px-lg-5">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center text-white">
                        <small><i class="fa fa-phone-alt mr-2"></i>+88-031-62534</small>
                        <small class="px-3">|</small>
                        <small><i class="fa fa-envelope mr-2"></i>cpigeneral@yahoo.com</small>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-2" href="index.html">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-2" href="index.html">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-2" href="index.html">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-2" href="index.html">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-2" href="index.html">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        <!-- Navbar Start -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
                <a href="{{ url('/') }}" class="navbar-brand ml-lg-3">
                    <img height="100" class="d-none d-lg-block" src="{{ asset('frontend/assets/img/logo.jpeg') }}"
                        alt="logo">
                    <h1 class="d-lg-none d-block">CPI</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ url('/') }}"
                            class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                        <a href="{{ route('department') }}"
                            class="nav-item nav-link {{ request()->is('department') ? 'active' : '' }}">Departments</a>
                        <a href="{{ route('teacher') }}"
                            class="nav-item nav-link {{ request()->is('teacher') ? 'active' : '' }}">Teachers</a>
                        <a href="{{ route('notice') }}"
                            class="nav-item nav-link {{ request()->is('notice') ? 'active' : '' }}">Notice</a>
                        <a href="{{ route('contact') }}"
                            class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                    </div>
                    <a href="{{ uri('/login') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Admin Login</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->
    </header>


    <main>
        @yield('content')
    </main>


    <!-- Footer Start -->
    <footer>
        <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
            <div class="container mt-5 pt-5">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="mt-n2 text-uppercase text-white"><img height="80"
                                    src="{{ asset('frontend/assets/img/logo.jpeg') }}" alt=""></h1>
                        </a>
                        <p class="m-0">Chattogram Polytechnic Institute is considered one of the best polytechnic
                            institutes because it combines high-quality technical education with extensive practical
                            training in well-equipped labs and workshops. Its large, peaceful campus provides an ideal
                            learning environment, while experienced teachers ensure strong academic guidance.</p>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        <div class="w-100">
                            <div class="input-group">
                                <input type="text" class="form-control border-light" style="padding: 30px;"
                                    placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary px-4">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Nasirabad, Chattogram ,BD</p>
                        <p><i class="fa fa-phone-alt mr-2"></i> +88-031-62534</p>
                        <p><i class="fa fa-envelope mr-2"></i>cpigeneral@yahoo.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="text-white mr-4" href="index.html#"><i class="fab fa-2x fa-twitter"></i></a>
                            <a class="text-white mr-4" href="index.html#"><i class="fab fa-2x fa-facebook-f"></i></a>
                            <a class="text-white mr-4" href="index.html#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                            <a class="text-white" href="https://chattogram.polytech.gov.bd/"><i
                                    class="fab fa-2x fa-google"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h3 class="text-white mb-4">Departments</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="index.html#"><i class="fa fa-angle-right mr-2"></i>CST
                            </a>
                            <a class="text-white-50 mb-2" href="index.html#"><i
                                    class="fa fa-angle-right mr-2"></i>Civil</a>
                            <a class="text-white-50 mb-2" href="index.html#"><i
                                    class="fa fa-angle-right mr-2"></i>Mechanical</a>
                            <a class="text-white-50 mb-2" href="index.html#"><i
                                    class="fa fa-angle-right mr-2"></i>Electrical</a>
                            <a class="text-white-50" href="index.html#"><i class="fa fa-angle-right mr-2"></i>Power</a>
                            <a class="text-white-50" href="index.html#"><i class="fa fa-angle-right mr-2"></i>Env</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="index.html#"><i
                                    class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                            <a class="text-white-50 mb-2" href="index.html#"><i class="fa fa-angle-right mr-2"></i>Terms
                                & Condition</a>
                            <a class="text-white-50 mb-2" href="index.html#"><i
                                    class="fa fa-angle-right mr-2"></i>Regular FAQs</a>
                            <a class="text-white-50 mb-2" href="index.html#"><i class="fa fa-angle-right mr-2"></i>Help
                                & Support</a>
                            <a class="text-white-50" href="index.html#"><i
                                    class="fa fa-angle-right mr-2"></i>Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white-50 border-top py-4"
            style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                        <p class="m-0">Copyright &copy; <a class="text-white" href="index.html#">CPI</a>. All Rights
                            Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <p class="m-0">Designed by CPI students </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="index.html#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{ asset('frontend/assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>
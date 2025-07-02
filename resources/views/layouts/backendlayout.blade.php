<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    @yield('css')
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    @stack('styles')
</head>

<!-- body start -->

<body data-menu-color="light" data-sidebar="default">
    <div id="app-layout">
        <!-- Topbar Start -->
        <div class="topbar-custom">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                        <li>
                            <button class="button-toggle-menu nav-link">
                                <i data-feather="menu" class="noti-icon"></i>
                            </button>
                        </li>
                        <li class="d-none d-lg-block">
                            <h5 class="mb-0">Good Morning, {{ Auth()->user()->name }}</h5>
                        </li>
                    </ul>

                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">


                        <li class="d-none d-sm-flex">
                            <button type="button" class="btn nav-link" data-toggle="fullscreen">
                                <i data-feather="maximize" class="align-middle fullscreen noti-icon"></i>
                            </button>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown"
                                href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="https://api.dicebear.com/9.x/initials/svg?seed={{ Auth()->user()->name }}"
                                    alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    {{ Auth()->user()->name ?? '' }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class='dropdown-item notify-item' href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        <i class="mdi mdi-location-exit fs-16 align-middle"></i>
                                        <span>Logout</span>
                                    </a>
                                </form>

                            </div>
                        </li>

                    </ul>
                </div>

            </div>

        </div>
        <!-- end Topbar -->

        <!-- Left Sidebar Start -->
        <div class="app-sidebar-menu">
            <div class="h-100" data-simplebar>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <div class="logo-box">
                        <a class='logo logo-light' href='index.html'>
                            <span class="logo-sm">
                                <img src="{{ asset('backend/assets/images/logo-sm.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo-light.png')}}" alt="" height="24">
                            </span>
                        </a>
                        <a class='logo logo-dark mb-3' href='{{ url('/') }}'>
                            <span class="logo-sm">
                                <img src="{{ asset('backend/assets/images/logo.jpeg')}}" alt="logo" height="50">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo.jpeg')}}" alt="logo" height="50">
                            </span>
                        </a>
                    </div>

                    @include('layouts.main-menu')

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                @yield('backend')

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col fs-13 text-muted text-center">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> - Made with <span class="mdi mdi-heart text-primary"></span> by CPI students.  
                                
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="{{ asset('backend/assets/js/pages/crm-dashboard.init.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    @stack('scripts')
<!-- 
    <script>
        const notyf = new Notyf({
            duration: 5000,
            ripple: true,
            dismissible: true,
            position: {
                x: 'right',
                y: 'top',
            },
            types: [{
                type: 'success',
                background: 'green',
                icon: {
                    className: 'mdi mdi-check-circle-outline',
                    tagName: 'span',
                    color: 'white'
                }
            },
            {
                type: 'error',
                background: '#d32f2f',
                icon: {
                    className: 'mdi mdi-alert-circle-outline',
                    tagName: 'span',
                    color: 'white'
                }
            }
            ]
        });

        @if(session('success'))
            notyf.success({
                message: "{{ session('success') }}",
                icon: {
                    className: 'mdi mdi-check-circle-outline',
                    tagName: 'span',
                    color: 'white'
                }
            });
        @endif

        @if(session('error'))
            notyf.error({
                message: "{{ session('error') }}",
                icon: {
                    className: 'mdi mdi-alert-circle-outline',
                    tagName: 'span',
                    color: 'white'
                }
            });
        @endif
    </script> -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
            const lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy-bg"));

            if ("IntersectionObserver" in window) {
                // Image observer
                const imageObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.dataset.src;
                            img.classList.remove("lazy");
                            observer.unobserve(img);
                        }
                    });
                });

                lazyImages.forEach(function (img) {
                    imageObserver.observe(img);
                });

                // Background observer
                const bgObserver = new IntersectionObserver(function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            const el = entry.target;
                            el.style.backgroundImage = 'url(' + el.dataset.bg + ')';
                            el.classList.remove("lazy-bg");
                            observer.unobserve(el);
                        }
                    });
                });

                lazyBackgrounds.forEach(function (el) {
                    bgObserver.observe(el);
                });

            } else {
                // Fallback for older browsers
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                    img.classList.remove("lazy");
                });

                lazyBackgrounds.forEach(el => {
                    el.style.backgroundImage = 'url(' + el.dataset.bg + ')';
                    el.classList.remove("lazy-bg");
                });
            }
        });
    </script>

</body>

</html>
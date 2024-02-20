<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>MuseStay</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href=" {{ asset('stisla/node_modules/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href=" {{ asset('stisla/node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('stisla/node_modules/select2/dist/css/select2.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('stisla/node_modules/selectric/public/selectric.css') }} ">
    <link rel="stylesheet"
        href=" {{ asset('stisla/node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('stisla/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }} ">
    <link rel="stylesheet" href="{{ asset('stisla/node_modules/ionicons201/css/ionicons.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src=" {{ asset('stisla/assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi,
                                @auth
                                    {{ Auth::user()->name }}
                                @endauth
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                @if (Auth::check())
                    @if (Auth::user()->role === 'admin')
                        <!-- Sidebar admin -->
                        <aside id="sidebar-wrapper">
                            <div class="sidebar-brand">
                                <a href="index.html">MUSESTAY</a>
                            </div>
                            <div class="sidebar-brand sidebar-brand-sm">
                                <a href="index.html">MST</a>
                            </div>
                            <ul class="sidebar-menu">
                                <li class="menu-header">Dashboard</li>
                                <li class="nav-item">
                                    <a href="">
                                        <i class="fas fa-fire"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="menu-header">Menu</li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                            class="fas fa-th"></i> <span>Museum</span></a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a class="nav-link"
                                                href="{{ url('reservasi/create') }}">Reservasi</a>
                                        </li>
                                        <li><a class="nav-link" href="{{ url('pembayaran-tiket/menu') }}">Transaksi</a>
                                        </li>
                                        <li><a class="nav-link" href="">Kategori</a></li>
                                        <li><a class="nav-link" href="">Penerbit</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                            class="fas fa-th"></i> <span>Hotel</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="">Kategori</a></li>
                                        <li><a class="nav-link" href="">Penerbit</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="">
                                        <i class="fas fa-fire"></i>
                                        <span>Peminjaman</span>
                                    </a>
                                </li>
                                <li class="menu-header">Master Data Admin</li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                            class="fas fa-th"></i> <span>Museum</span></a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a class="nav-link"
                                                href="{{ url('reservasi') }}">Reservasi</a>
                                        </li>
                                        <li><a class="nav-link" href="{{ url('pembayaran-tiket') }}">Pembayaran</a></li>
                                        <li><a class="nav-link" href="">Kategori</a></li>
                                        <li><a class="nav-link" href="">Penerbit</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                            class="fas fa-th"></i> <span>Hotel</span></a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a class="nav-link"
                                                href="{{ url('hotel') }}">Hotel</a>
                                        </li>
                                        <li><a class="nav-link" href="{{ url('hotel/create') }}">Tambah Hotel</a></li>
                                        <li><a class="nav-link" href="{{ url('jenis-kamar') }}">Jenis Kamar</a></li>
                                        <li><a class="nav-link" href="{{ url('jenis-kamar/create') }}">Tambah Jenis Kamar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </aside>
                    @else
                        <aside id="sidebar-wrapper">
                            <div class="sidebar-brand">
                                <a href="index.html">MUSESTAY</a>
                            </div>
                            <div class="sidebar-brand sidebar-brand-sm">
                                <a href="index.html">MST</a>
                            </div>
                            <ul class="sidebar-menu">
                                <li class="menu-header">Dashboard</li>
                                <li class="nav-item">
                                    <a href="">
                                        <i class="fas fa-fire"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="menu-header">MENU</li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                            class="fas fa-th"></i> <span>Museum</span></a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a class="nav-link"
                                                href="{{ url('reservasi/create') }}">Reservasi</a>
                                        </li>
                                        <li><a class="nav-link"
                                                href="{{ url('pembayaran-tiket/menu') }}">Transaksi</a></li>
                                        <li><a class="nav-link" href="">Kategori</a></li>
                                        <li><a class="nav-link" href="">Penerbit</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                            class="fas fa-th"></i> <span>Hotel</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="nav-link" href="">Kategori</a></li>
                                        <li><a class="nav-link" href="">Penerbit</a></li>
                                    </ul>
                                </li>
                                <li class="menu-header">Starter</li>
                                <li class="nav-item">
                                    <a href="">
                                        <i class="fas fa-fire"></i>
                                        <span>Peminjaman</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    @endif
                @endif
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('judul')</h1>
                        <div class="section-header-breadcrumb">
                        </div>
                    </div>

                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2024 <div class="bullet"></div> Design By zachbn
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('stisla/assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src=" {{ asset('stisla/node_modules/cleave.js/dist/cleave.min.js') }}"></script>
    <script src=" {{ asset('stisla/node_modules/cleave.js/dist/addons/cleave-phone.us.js') }} "></script>
    <script src=" {{ asset('stisla/node_modules/jquery-pwstrength/jquery.pwstrength.min.js') }} "></script>
    <script src=" {{ asset('stisla/node_modules/bootstrap-daterangepicker/daterangepicker.js') }} "></script>
    <script src=" {{ asset('stisla/node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }} "></script>
    <script src=" {{ asset('stisla/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }} "></script>
    <script src=" {{ asset('stisla/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }} "></script>
    <script src=" {{ asset('stisla/node_modules/select2/dist/js/select2.full.min.js') }} "></script>
    <script src=" {{ asset('stisla/node_modules/selectric/public/jquery.selectric.min.js') }} "></script>

    <!-- Template JS File -->
    <script src="{{ asset('stisla/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('stisla/assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src=" {{ asset('stisla/assets/js/page/forms-advanced-forms.js') }}"></script>
    <script src="{{ asset('stisla/assets/js/page/modules-ion-icons.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('judul')</title>

    {{-- Fav Icon HTML --}}
    <link rel="icon" type="image/x-icon" href="{{ url('assets/img/logo-servisin.png') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/admin/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    {{-- Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    {{-- Select2 --}}
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>

    {{-- Chart --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/dashboard') }}" class="nav-link">Home</a>
                </li>
            </ul>
            <!-- Account Dropdown Menu -->
            <ul class="navbar-nav ml-auto">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block"><i class="far fa-user"></i> Hi, {{ auth()->guard('admin')->user()->name }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('admin.settings') }}" class="dropdown-item has-icon">
                            <i class="fa-sharp fa-solid fa-gears mr-1"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ url('/admin/logout') }}" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
            <!--END-->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ url('assets/img/logo-servisin.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light" style="margin-left: 10px;">Admin Servisin</span>
            </a>

            <!-- Sidebar -->

            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{ url('/admin/dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        {{-- Data User Start --}}

                        <li class="nav-header">Data User</li>
                        <li class="nav-item has-treeview">

                            <a href="#" class="nav-link">
                                <i class="fa fa-id-card nav-icon"></i>
                                <p>
                                    Admin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/admin/data-admin') }}" class="nav-link">
                                        <i class="fa fa-id-card nav-icon"></i>
                                        <p>Data Admin</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ url('/admin/konsumen') }}" class="nav-link">
                                <i class="fa-solid fa-users nav-icon"></i>
                                <p>
                                    Konsumen
                                </p>
                            </a>
                        </li>
                        {{-- Data User End --}}

                        {{-- Permissions Start --}}

                        <li class="nav-header">Data Hak Akses</li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fa fa-id-card nav-icon"></i>
                                <p>
                                    Hak Akses User
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">

                                    <a href="#" class="nav-link">
                                        <i class="fa-regular fa-circle-user nav-icon"></i>
                                        <p>
                                            Roles
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.roles.index') }}" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Data Roles</p>
                                            </a>
                                        </li>
                                    </ul>

                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/give-roles') }}" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Give Roles</p>
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">

                                    <a href="#" class="nav-link">
                                        <i class="fa-solid fa-key nav-icon"></i>
                                        <p>
                                            Permissions
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/permissions') }}" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Data Permissions</p>
                                            </a>
                                        </li>
                                    </ul>


                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('/admin/give-permission') }}" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Give Permissions</p>
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </li>

                        {{-- Permissions End --}}

                        <!-- POST LAYANAN -->
                        <li class="nav-header">Post</li>

                        <li class="nav-item has-treeview">
                            <a href="{{ url('/admin/layanan') }}" class="nav-link">
                                <i class="fa-regular fa-folder nav-icon"></i>
                                <p>
                                    Add Layanan
                                </p>
                            </a>
                        </li>

                        {{-- Post Artikel --}}
                        <li class="nav-item has-treeview">
                            <a href="{{ route('admin.artikel.index') }}" class="nav-link">
                                <i class="fas fa-book nav-icon"></i>
                                <p>
                                    Post Artikel
                                </p>
                            </a>
                        </li>
                        {{-- End Artikel --}}

                        {{-- Post Promo --}}
                        <li class="nav-item has-treeview">
                            <a href="{{ route('admin.carousel-promo.index') }}" class="nav-link">
                                <i class="fas fa-file nav-icon"></i>
                                <p>
                                    Post Promo
                                </p>
                            </a>
                        </li>
                        {{-- End Post Promo --}}

                        {{-- Transaksi Start --}}
                        <li class="nav-header">Transaksi</li>
                        <li class="nav-item has-treeview">
                            <a href="{{ url('/admin/pemesanan') }}" class="nav-link">
                                <i class="fas fa-shopping-cart nav-icon"></i>
                                <p>
                                    Pemesanan
                                </p>
                            </a>
                        </li>
                        <!-- Transaksi End -->

                        <li class="nav-header">Control</li>
                        <li class="nav-item has-treeview">
                            <a href="{{ url('/admin/transaksi') }}" class="nav-link">
                                <i class="fa-solid fa-users nav-icon"></i>
                                <p>
                                    Kebijakan Privasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ url('/admin/transaksi') }}" class="nav-link">
                                <i class="fa-solid fa-users nav-icon"></i>
                                <p>
                                    Syarat & Ketentuan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{ url('/admin/tentang-kami') }}" class="nav-link">
                                <i class="fa-solid fa-users nav-icon"></i>
                                <p>
                                    Cara Memesan
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <br>
            <br>
            <!-- /.sidebar -->
        </aside>
    </div>

    {{-- <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ url('/admin/dashboard') }}" class="nav-link">Home</a>
                    </li>
                </ul>
                <!-- Account Dropdown Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block"><i class="far fa-user"></i> Hi, {{ auth()->guard('admin')->user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ url('/admin/profile/' .auth()->guard('admin')->user()->id .'') }}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <!--END-->
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">

                    <span class="brand-text font-weight-light" style="margin-left: 40px;">Servisin</span>
                </a>

                <!-- Sidebar -->

                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="{{ url('/admin/dashboard') }}" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-header">Data User</li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-id-card nav-icon"></i>
                                    <p>
                                        Hak Akses Admin
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('/admin/data-admin') }}" class="nav-link">
                                            <i class="fa fa-id-card nav-icon"></i>
                                            <p>Data Admin</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('/admin/anggota') }}" class="nav-link">
                                            <i class="fa-regular fa-circle-user nav-icon"></i>
                                            <p>Roles</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ url('/admin/anggota') }}" class="nav-link">
                                            <i class="fa-solid fa-key nav-icon"></i>
                                            <p>Permissions</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="{{ url('/admin/konsumen') }}" class="nav-link">
                                    <i class="fa-solid fa-users nav-icon"></i>
                                    <p>
                                        Konsumen
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="{{ url('/admin/tentang-kami') }}" class="nav-link">
                                    <i class="fa-solid fa-users nav-icon"></i>
                                    <p>
                                        Penyedia Jasa
                                    </p>
                                </a>
                            </li>

                            <!-- POST LAYANAN -->
                            <li class="nav-header">Post</li>
                            <li class="nav-item has-treeview">
                                <a href="{{ url('/admin/layanan') }}" class="nav-link">
                                    <i class="fas fa-file nav-icon"></i>
                                    <p>
                                        Add Layanan
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="{{ route('admin.artikel.index') }}" class="nav-link">
                                    <i class="fas fa-book nav-icon"></i>
                                    <p>
                                        Post Artikel
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="{{ url('/admin/promo') }}" class="nav-link">
                                    <i class="fas fa-file nav-icon"></i>
                                    <p>
                                        Post Promo
                                    </p>
                                </a>
                            </li>
                            <!-- END POST -->

                            <!-- TRANSAKSI -->
                            <li class="nav-header">Transaksi</li>
                            <li class="nav-item has-treeview">
                                <a href="{{ url('/admin/pemesanan') }}" class="nav-link">
                                    <i class="fas fa-shopping-cart nav-icon"></i>
                                    <p>
                                        Pemesanan
                                    </p>
                                </a>
                            </li>
                            <!-- END TRANSAKSI -->

                            <li class="nav-header">Control</li>
                            <li class="nav-item has-treeview">
                                <a href="{{ url('/admin/transaksi') }}" class="nav-link">
                                    <i class="fa-solid fa-users nav-icon"></i>
                                    <p>
                                        Kebijakan Privasi
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="{{ url('/admin/transaksi') }}" class="nav-link">
                                    <i class="fa-solid fa-users nav-icon"></i>
                                    <p>
                                        Syarat & Ketentuan
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="{{ url('/admin/tentang-kami') }}" class="nav-link">
                                    <i class="fa-solid fa-users nav-icon"></i>
                                    <p>
                                        Cara Memesan
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <br>
                <br>
                <!-- /.sidebar -->
            </aside> --}}

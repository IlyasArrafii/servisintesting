<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('judul')</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{url('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('assets/admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('assets/admin/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('assets/admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('assets/admin/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>

  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/drilldown.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>


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
          <a href="{{url('/dashboard')}}" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Account Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <div class="d-sm-none d-lg-inline-block"><i class="far fa-user"></i> Hi, {{session()->get('SessionNama')}} <i class="fas fa-angle-down"></i></div>
          </a>
          <div class="dropdown-menu dropdown-menu dropdown-menu-right">
            <div class="dropdown"></div>
            <div class="dropdown"></div>
            <!-- <a href="{{url('/logout')}}" class="dropdown-item">
                            <i class="fas fa-user-cog"></i> Setting
                        </a> -->
            <a href="{{url('/logout')}}" class="dropdown-item text-danger">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </li>
        <!--END-->
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">

        <span class="brand-text font-weight-light" style="margin-left: 40px;">KBIH Al Hidayah</span>
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
              <a href="{{url('/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">Data User</li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fa-regular fa-file nav-icon"></i>
                <p>
                  Admin
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/admin/anggota')}}" class="nav-link">
                    <i class="fa fa-id-card nav-icon"></i>
                    <p>Data Admin</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/admin/anggota')}}" class="nav-link">
                    <i class="fa-regular fa-circle-user nav-icon"></i>
                    <p>Roles</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/admin/anggota')}}" class="nav-link">
                    <i class="fa-solid fa-key nav-icon"></i>
                    <p>Permissions</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('/admin/tentang-kami')}}" class="nav-link">
                <i class="fa-solid fa-users nav-icon"></i>
                <p>
                  Konsumen
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('/admin/tentang-kami')}}" class="nav-link">
                <i class="fa-solid fa-users nav-icon"></i>
                <p>
                  Penyedia Jasa
                </p>
              </a>
            </li>
            <li class="nav-header">LAYANAN</li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-shopping-cart nav-icon"></i>
                <p>
                  Master Layanan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/admin/layanan')}}" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                    <p>Data Layanan</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header"></li>
            <li class="nav-item has-treeview">
              <a href="{{url('/admin/testimoni')}}" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>
                  Data Testimoni

                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('/admin/pemesanan')}}" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>
                  Data Pemesanan
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('/admin/transaksi')}}" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>
                  Data Transaksi
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('/admin/tentang-kami')}}" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>
                  Data Tentang Kami
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('/admin/kontak-perusahaan')}}" class="nav-link">
                <i class="fas fa-table nav-icon"></i>
                <p>
                  Data Kontak Perusahaan
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
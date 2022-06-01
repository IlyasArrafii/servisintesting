<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Halaman Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('assets/admin/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/admin/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ url('assets/admin/modules/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/admin/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('assets/admin/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('assets/admin/css/style.css')}}">
  <link rel="stylesheet" href="{{ url('assets/admin/css/components.css')}}">

  <!-- Hightchart -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/data.js"></script>
  <script src="https://code.highcharts.com/modules/drilldown.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <script src="https://code.highcharts.com/modules/accessibility.js"></script>

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">

          </div>
        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Pemberitahuan
              </div>
              <div class="dropdown-list-content dropdown-list-icons">

                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
                <a href="features-settings.html" class="dropdown-item has-icon">
                  <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Servisin</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SVS</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
              <a href="{{url('/dashboard-admin')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Post</li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="{{url('/layanan')}}"><i class="fas fa-file"></i><span>Add Layanan</span></a>
              <a class="nav-link" href="{{url('/artikel')}}"><i class="fas fa-book"></i><span>Post Artikel</span></a>
            </li>

            <li class="menu-header">Transaction</li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="{{url('/admin-pemesanan')}}"><i class="fas fa-shopping-cart"></i><span>Pemesanan</span></a>
            </li>

            <li class="menu-header">Data User</li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="{{url('/konsumen')}}"><i class="fas fa-users"></i><span>Konsumen</span></a>
              <a class="nav-link" href="../penyediajasa/penyediajasa.php"><i class="fas fa-users"></i><span>Penyedia Jasa</span></a>
              <a class="nav-link" href="../admin/admin.php"><i class="fas fa-user-circle"></i><span>Admin</span></a>
            </li>
            <li class="menu-header">Control</li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="{{url('/admin-kebijakan')}}"><i class="fas fa-users"></i><span>Kebijakan Privasi</span></a>
              <a class="nav-link" href="{{url('/konsumen')}}"><i class="fas fa-users"></i><span>Syarat & Ketentuan</span></a>
              <a class="nav-link" href="{{url('/konsumen')}}"><i class="fas fa-users"></i><span>Cara Memesan</span></a>
            </li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-link"></i> Lihat Website
            </a>
          </div>
        </aside>
      </div>
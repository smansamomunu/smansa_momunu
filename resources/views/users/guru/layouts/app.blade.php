home.blade.php<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  @yield('title')
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('users/css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('users/css/mdb.min.css')}}">

  <!-- Your custom styles (optional) -->
  @yield('css')
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

  <!-- Main Navigation -->
  <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
            <a href="#" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"></a>
          </div>
        </li>

        <!-- Search Form -->
        <li>
          <form class="search-form" role="search">
            <div class="md-form mt-0 waves-light">
              <input type="text" class="form-control py-2" placeholder="Search">
            </div>
          </form>
        </li>

        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <a href="{{route('admin.berita.index')}}" class="collapsible-header waves-effect"><i
                  class="w-fa fas fa-tachometer-alt"></i>Home</a>
            </li>
            <li>
              <a href="{{route('admin.berita.index')}}" class="collapsible-header waves-effect"><i
                  class="w-fa fas fa-newspaper"></i>Berita</a>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-list"></i>Akademik<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="{{route('admin.mapel.index')}}" class="waves-effect">Materi</a>
                  </li>
                </ul>
              </div>
            </li>

          </ul>
        </li>
        <!-- Side navigation links -->

      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
        <p>Dashboard v.6</p>
      </div>

      <div class="d-flex change-mode">

        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">Log Out</a>
              <a class="dropdown-item" href="#">My account</a>
            </div>
          </li>

        </ul>

    </nav>
    <!-- Navbar -->
    </div>

  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->
  @yield('content')
  <!-- Main layout -->

  <!-- Footer -->
  <footer class="page-footer pt-0 mt-5 mdb-color lighten-4">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>

      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="{{asset('users/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('users/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('users/js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('users/js/mdb.min.js')}}"></script>
  <!-- Initializations -->
  
  @yield('script')

</body>

</html>

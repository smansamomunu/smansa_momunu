<!DOCTYPE html>
<html lang="en">

<head>
  <title>SMA Negeri 1 Momunu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('index/images/favicon.png')}}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great Vibes:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('index/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/icomoon.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/style_materi.css')}}">

  @yield('css')

</head>

<body>
  <header id="header" class="sticky-top">
    <!-- <div id="preloader-active" style="display: none;">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="{{asset('index/images/favicon.ico')}}" alt="">
        </div>
      </div>
    </div>
  </div>
  @yield('css') -->

    <nav class="navbar navbar-expand-lg ftco-navbar-light" style="background-color: #232323;" id="ftco-navbar">
      <div class="container-fluid" style="background-color: #232323;">
        <a class="navbar-brand" href="{{route('welcome')}}"><img style="max-height: 60px;" src="{{asset('index/images/buol.png')}}"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span style="background-image: url('{{url('index/icon/list.png')}}');" class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-right" id="navbarNav">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item{{ request()->is('/') ? ' active' : ''}}">
              <a class="nav-link" href="{{route('welcome')}}">Beranda</a>
            </li>
            <li class="nav-item{{ request()->is('profile') ? ' active' : ''}}">
              <a class="nav-link" href="{{route('profile')}}">Profil</a>
            </li>
            <li class="nav-item{{ request()->is('akademik') ? ' active' : ''}}">
              <a class="nav-link" href="{{route('akademik')}}">Akademik</a>
            </li>
            <li class="nav-item{{ request()->is('berita') ? ' active' : ''}}">
              <a class="nav-link" href="{{route('berita')}}">Berita</a>
            </li>
            <li class="nav-item{{ request()->is('galeri') ? ' active' : ''}}">
              <a class="nav-link" href="{{route('galeri')}}">Galeri</a>
            </li>
            <li class="nav-item{{ request()->is('materi') ? ' active' : ''}}">
              <a class="nav-link" href="{{route('materi')}}">Materi</a>
            </li>
            <li class="nav-item{{ request()->is('pengumuman') ? ' active' : ''}}">
              <a class="nav-link" href="{{route('pengumuman')}}">Pengumuman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mt-auto" href="#"><span>Unduhan</span></a>
            </li>
            <li class="nav-item{{ request()->is('login') ? ' active' : ''}}">
              <a class="nav-link" href="{{route('login')}}"><button class="btn btn-primary">Masuk</button></a>
              <!--<a class="nav-link btn btn-primary" role="button" href="{{route('login')}}">Masuk</a>-->
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>
  @yield('content')

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-4 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Hubungi kami di</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Desa Lamadong Dua, Kec. Momunu, Kab. Buol, 94565</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 822 9141 3079</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"> info@sman1momunu.sch.id</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Berita Terkini</h2>
            <div class="block-21 mb-4 d-flex">
              <a href="{{route('berita')}}" class="blog-img mr-4" style="background-image: url('{{url('/index/images/clipart_news2.png')}}');"></a>
              <div class="text">
                <h3 class="heading"><a href="{{url('berita/')}}"> Index Berita </a></h3>
                <div class="meta">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-lg-3">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Terkait</h2>
            <ul class="list-unstyled">
              <li><a href="https://www.kemdikbud.go.id/" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>Kemdikbud</a></li>
              <li><a href="https://www.sultengprov.go.id/" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>Prov Sulteng</a></li>
              <li><a href="https://www.disdikbud.sultengprov.go.id/" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>Disdikjar Prov Sulteng</a></li>
              <li><a href="https://dapo.dikdasmen.kemdikbud.go.id/" target="_blank"><span class="ion-ios-arrow-round-forward mr-2"></span>Dapodik</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2 mb-0">Kontak Kami</h2>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="https://twitter.com/SMomunu" target="_blank"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/smansa.momunu" target="_blank"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/smansa_momunu/" target="_blank"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCOHTzTwn-rvqWKFq3RnLFmw" target="_blank"><span class="icon-youtube-play"></span></a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><a>Hak Cipta oleh <b>SMA Negeri 1 Momunu</b> &copy;<script>
                document.write(new Date().getFullYear());
              </script><br> with <i class="icon-heart" aria-hidden="true"></i> from <a href="https://colorlib.com" target="_blank">Colorlib</b></a> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <br>
          <br>
        </div>
      </div>
    </div>
  </footer>


  <script src="{{asset('index/js/jquery.min.js')}}"></script>
  <script src="{{asset('index/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('index/js/popper.min.js')}}"></script>
  <script src="{{asset('index/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('index/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('index/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('index/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('index/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('index/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('index/js/aos.js')}}"></script>
  <script src="{{asset('index/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('index/js/scrollax.min.js')}}"></script>
  <script src="{{asset('index/js/main.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

  <script type="text/javascript">
    $(function() {
      //fungsi dibawah hanya berjalan untuk semua tag <a> yang diawali (^) dengan hash (#)
      $('a[href^="#"]').on('click', function(e) {
        $target = $(this.hash);
        $jarak = 0;
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - $jarak
          },
          500, //durasi dalam milisekon
          'swing', //efek transisi (opsi : swing / linear)
        );
      });
    });
  </script>

  @yield('script')

</body>

</html>
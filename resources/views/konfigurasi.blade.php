<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tracer Study Polimedia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Style Slider Kuis -->
  <style>
    .form-section {
      display: none;
    }

    .current-section {
      display: block;
    }
  </style>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <ul>

            @if(Auth::user()->status === 'Responden')
                <!-- Only show Kuisioner link for Responden -->
                <li><a href="{{ route('kuis') }}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Kuisioner</span></a></li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" class="nav-link scrollto" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bx bx-exit"></i> <span>Keluar</span>
                    </a>
                </li>
            @elseif(Auth::user()->status === 'Prodi')
                <!-- Show all links for Prodi users -->
                <li><a href="{{ route('aktor') }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Akun</span></a></li>
                <li><a href="{{ route('responden.index') }}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Kuisioner</span></a></li>
                <li><a href="{{ route('alumni') }}" class="nav-link scrollto"><i class="bx bx-user-voice"></i> <span>Alumni</span></a></li>
                <li><a href="#" class="nav-link scrollto"><i class="bx bx-user-pin"></i> <span>Polling</span></a></li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" class="nav-link scrollto" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bx bx-exit"></i> <span>Keluar</span>
                    </a>
                </li>
            @else
                <!-- For any other status, show only the logout option -->
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" class="nav-link scrollto" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bx bx-exit"></i> <span>Keluar</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav><!-- .nav-menu -->


  </header><!-- End Header -->

  <div class="content">

    @yield('content')

  </div>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Tracer Study 2023</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        by <a href="https://cdc.polimedia.ac.id/">PUSAT KARIR POLIMEDIA</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/simple-datatables/simple-datatables.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="shortcut icon" href="https://getstisla.com/landing/stisla.png">
  <!-- General CSS Files -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Ionicons -->
  <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">
  <link href="{{ asset('assets/css/sweetalert.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
  <!-- CSS Libraries -->
  @yield('style')
  <!-- Template CSS -->
  {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">--}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('web/css/components.css') }}">
</head>
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('partials.navbar')
      @include('partials.sidebar')
      <!-- Main Content -->
      <div class="main-content">
          @yield('content')
        {{-- <section class="section">
          <div class="section-header">
            <h1>Blank Page</h1>
          </div>

          <div class="section-body">
          </div>
        </section> --}}
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://getstisla.com/">Stisla</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
  <script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
  <!-- JS Libraies -->
  
  <!-- Template JS File -->
  <script src="{{ asset('web/js/stisla.js') }}"></script>
  <script src="{{ asset('web/js/scripts.js') }}"></script>
  {{-- <script src="{{ asset('web/js/custom.js') }}"></script> --}}
  <!-- Page Specific JS File -->
  @yield('script')
</body>
</html>

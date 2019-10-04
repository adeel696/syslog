<!doctype html>
<html lang="en">

  <head>
    <title>Noveo Tech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/x-icon" href="{{ asset('/favicon.png') }}" />

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
	<link href="{{ asset('/admin/css/style.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/home/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('/home/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/css/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('/home/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/css/aos.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/home/css/carousel.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('/home/css/style.css') }}">
	@stack('style')
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="col-lg-4 text-center">
              <div class="site-logo" style="float:left;">
                <a href="{{ url('/') }}"><img src="{{ url('home/img/logo.png') }}" style="width:150px"/></a>
              </div>
              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>
            </div>
            <div class="col-lg-8">
              <nav class="site-navigation text-left mr-auto " role="navigation"  style="float:right;">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="{{ url('/services') }}" class="nav-link">Our Services</a></li>
                  <li><a href="{{ url('/gooddeals') }}" class="nav-link">Good Deals</a></li>
                  <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                  <li><a href="{{ url('/register') }}" class="nav-link">Register</a></li>
                </ul>
              </nav>
            </div>
            

          </div>
        </div>

    </header>
    @yield('content')
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="{{ url('/services') }}">Our Services</a></li>
                  <li><a href="{{ url('/gooddeals') }}">Good Deals</a></li>
                  <li><a href="{{ url('/login') }}">Login</a></li>
                  <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | SYSLOG
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="{{ asset('/home/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/home/js/popper.min.js') }}"></script>
    <script src="{{ asset('/home/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/home/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/home/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('/home/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/home/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('/home/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('/home/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('/home/js/aos.js') }}"></script>
	<script src="{{ asset('/home/js/carousel.js') }}"></script>
    <script src="{{ asset('/home/js/main.js') }}"></script>
    @stack('scripts')
  </body>

</html>

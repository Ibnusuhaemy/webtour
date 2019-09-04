<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta Tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Icon -->
  <link rel="shortcut icon" href="images/jagadtour-icon.ico">
  <link rel="icon" sizes="32x32" href="images/jagadtour-icon.ico">
  <link rel="apple-touch-icon" sizes="32x32" href="images/jagadtour-icon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap.3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome.4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/jagad-icon.1.0/css/fontello.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/owl-carousel.2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/owl-carousel.2.3.4/assets/owl.theme.default.css">

  <link rel="stylesheet" type="text/css" href="vendor/angle-vladov-mobile-slider/jquery.mobile-slider.min.css">

  <link rel="stylesheet" type="text/css" href="css/main.css?v=15">
</head>
<body>
    <!-- Header -->
    <header class="header header-home">
        <div class="container">
        <!-- Contact Info -->
        <div class="row header-info">
            <div class="col-sm-4 col-md-5 info-logo">
            <img src="images/jagadtour-logo-baru.png" width="237" height="44" alt="Logo Jagad Tour" class="img-responsive">
            </div>
            <div class="col-xs-12 text-right show-mobile">
            <div class="mobile-title">Let's Explore <br> East Java!</div>
            <!--          <div class="mobile-title-desc">With Jagad Tour</div>-->
            </div>
            <div class="col-sm-8 col-md-7 info-contact">
            <span class="jgicon icon-call"></span>
            <div class="contact-call">
                <p class="contact-caption">For General Questions</p>
                <p class="contact-number"><a href="#">+623415051185</a></p>
            </div>
            <div class="contact-call">
                <p class="contact-caption">For Booking and Inquiries</p>
                <p class="contact-number"><a href="#">+628113785758</a></p>
            </div>
            </div>
        </div>

        <!-- Nav Menu -->
        <div class="row header-menu">
            <div class="col-xs-12">
            <nav class="navbar navbar-default menu-box">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu-box-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav menu-box-item">
                    <li class="active"><a href={{ url('/')}}>Home<span class="sr-only">(current)</span></a></li>
                    <li><a href={{ url('/family-trip')}}>Family Trip</a></li>
                    <li><a href={{ url('/corporate-trip')}}>Corporate</a></li>
                    <li><a href="#">Custom Trip</a></li>
                    <li><a href={{ url('/gallery-testimoni')}}>Gallery &amp; Testimoni</a></li>
                    <li><a href={{ url('/blog')}}>Blog</a></li>
                    <li><a href={{ url('/contact')}}>Contact Us</a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- Content Warp -->
    <div class="warper"></div>
        @yield('hero-header')
    <!-- Popular Package -->
    <section class="content content-home-package js-content-home-package">
        @yield('popular-package')
    </section>
    <!-- Trip Category -->
    <section class="content content-home-trip">
        @yield('trip-category')
    </section>
    <!-- Why Choose Us -->
    <div class="js-content-home-choose"></div>
    <section class="content content-home-choose">
        @yield('choose')
    </section>
    <!-- Testimonial -->
    <section class="content content-testi content-testi-home">
        @yield('testimonial')
    </section>
        @include('inc.footer')
</body>
    @include('inc.jsHome')
</html>
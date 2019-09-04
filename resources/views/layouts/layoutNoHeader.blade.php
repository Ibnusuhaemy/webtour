<!DOCTYPE html>
<html lang="en">
  <head>    
  <title>Jagadtour | {{$title}}</title>

    <!-- Meta Tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icon -->
    <link rel="shortcut icon" href="images/jagadtour-icon.ico">
    <link rel="icon" sizes="32x32" href="images/jagadtour-icon.ico">
    <link rel="apple-touch-icon" sizes="32x32" href="images/jagadtour-icon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap.3.3.7/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/font-awesome.4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/jagad-icon.1.0/css/fontello.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl-carousel.2.3.4/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/owl-carousel.2.3.4/assets/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/angle-vladov-mobile-slider/jquery.mobile-slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/datetimepicker.4.17.42/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/lightbox/dist/ekko-lightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/angle-vladov-mobile-slider/jquery.mobile-slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/datetimepicker.4.17.42/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
 
  </head>
  <body>
    
    <!-- Header -->
    <header class="header">
        <div class="container">    
          <!-- Contact Info -->
          <div class="row header-info">
            <div class="col-sm-4 col-md-5 info-logo">
              <img src="images/jagadtour-logo-baru.png" width="237" height="44" alt="Logo Jagadtour" class="img-responsive">
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
                    <li><a href={{ url('/')}}>Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Family Trip</a></li>
                    <li><a href={{ url('/package')}}>Corporate</a></li>
                    <li><a href="#">Custom Trip</a></li>
                    <li><a href={{ url('/gallery-testimoni')}}>Gallery & Testimoni</a></li>
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
    <div class="mobile-cta-other mobile-menu-cta">
        <div class="panel panel-default menu-cta-panel js-menu-cta-other animated">
          <div class="panel-body">
            <ul class="list-inline menu-cta-list">
              <li class="menu-cta-item"><a href="tel:+62878889992"><img class="img-responsive" src="images/icons/jagadtour-whatsapp.png" width="124" height="126" alt=""></a></li>
              <li class="menu-cta-item"><a href="mailto:halo@jagadtour.com"><span class="fa fa-envelope-o"></span></a></li>
              <li class="menu-cta-item"><a href="tel:+62878889992"><span class="fa fa-phone"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
       @yield('content')
      @include('inc.footer')
  </body>
  <script type="text/javascript" src="{{asset('vendor/jquery.3.2.1/jquery.3.2.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendor/bootstrap.3.3.7/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendor/owl-carousel.2.3.4/owl.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendor/scrolltofixed.1.0.8/jquery-scrolltofixed-min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.js-menu-cta-other').scrollToFixed({
        bottom: 0,
        preFixed: function() {
          $('.menu-cta-panel').addClass('mobile-menu-fixed');
          $('.menu-cta-panel').addClass('fade-in');
          $(".footer-copyright").css('padding-bottom', '80px');
        }
      });
    });
  </script>
    @yield('js')
</html>
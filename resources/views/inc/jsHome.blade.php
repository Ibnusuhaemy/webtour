  <!-- Javascript -->
  <script type="text/javascript" src="vendor/jquery.3.2.1/jquery.3.2.1.min.js"></script>
  <script type="text/javascript" src="vendor/bootstrap.3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="vendor/owl-carousel.2.3.4/owl.carousel.min.js"></script>
  <script type="text/javascript" src="vendor/progressbar.js/dist/progressbar.js"></script>
  <script type="text/javascript">
    $('.js-hero-slider').owlCarousel({
      dots: false,
      items: 1,
      loop: true,
      autoplay: true,
      animateOut: 'fadeOut',
      smartSpeed: 450
    });
  </script>

  <!-- Progress Bar -->
  <script type="text/javascript">
    //    $(window).scroll(function() {
    //       var hT = $('#scroll-to').offset().top,
    //           hH = $('#scroll-to').outerHeight(),
    //           wH = $(window).height(),
    //           wS = $(this).scrollTop();
    //       if (wS > (hT+hH-wH) && (hT > wS) && (wS+wH > hT+hH)){
    //          $('h1').addClass('view')
    //       } else {
    //          $('h1').removeClass('view')
    //       }
    //    });
  </script>

  <script type="text/javascript">
    var barTrust = new ProgressBar.Line(terpercaya, {
      strokeWidth: 4,
      easing: 'easeInOut',
      duration: 1400,
      color: '#FF681F',
      trailColor: 'white',
      trailWidth: 1,
      svgStyle: {
        width: '100%',
        height: '100%',
        borderRadius: '10px'
      },
      text: {
        style: {
          // Text color.
          // Default: same as stroke color (options.color)
          color: 'black',
          position: 'absolute',
          fontFamily: '"DINNextLTPro-Regular", Fallback, sans-serif',
          fontSize: '13px',
          right: '0',
          padding: 0,
          margin: 0,
          transform: null
        },
        autoStyleContainer: false
      },
      from: {
        color: '#FFEA82'
      },
      to: {
        color: '#ED6A5A'
      },
      step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
      }
    });
    // Number from 0.0 to 1.0

    var barSolid = new ProgressBar.Line(solid, {
      strokeWidth: 4,
      easing: 'easeInOut',
      duration: 1400,
      color: '#FF681F',
      trailColor: 'white',
      trailWidth: 1,
      svgStyle: {
        width: '100%',
        height: '100%',
        borderRadius: '10px'
      },
      text: {
        style: {
          // Text color.
          // Default: same as stroke color (options.color)
          color: 'black',
          fontFamily: '"DINNextLTPro-Regular", Fallback, sans-serif',
          fontSize: '13px',
          position: 'absolute',
          right: '0',
          padding: 0,
          margin: 0,
          transform: null
        },
        autoStyleContainer: false
      },
      from: {
        color: '#FFEA82'
      },
      to: {
        color: '#ED6A5A'
      },
      step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
      }
    });
    // Number from 0.0 to 1.0

    var barService = new ProgressBar.Line(service, {
      strokeWidth: 4,
      easing: 'easeInOut',
      duration: 1400,
      color: '#FF681F',
      trailColor: 'white',
      trailWidth: 1,
      svgStyle: {
        width: '100%',
        height: '100%',
        borderRadius: '10px'
      },
      text: {
        style: {
          // Text color.
          // Default: same as stroke color (options.color)
          color: 'black',
          fontFamily: '"DINNextLTPro-Regular", Fallback, sans-serif',
          fontSize: '13px',
          position: 'absolute',
          right: '0',
          padding: 0,
          margin: 0,
          transform: null
        },
        autoStyleContainer: false
      },
      from: {
        color: '#FFEA82'
      },
      to: {
        color: '#ED6A5A'
      },
      step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
      }
    });
    // Number from 0.0 to 1.0

    var barDone = new ProgressBar.Line(done, {
      strokeWidth: 4,
      easing: 'easeInOut',
      duration: 1400,
      color: '#FF681F',
      trailColor: 'white',
      trailWidth: 1,
      svgStyle: {
        width: '100%',
        height: '100%',
        borderRadius: '10px'
      },
      text: {
        style: {
          // Text color.
          // Default: same as stroke color (options.color)
          color: 'black',
          fontFamily: '"DINNextLTPro-Regular", Fallback, sans-serif',
          fontSize: '13px',
          position: 'absolute',
          right: '0',
          padding: 0,
          margin: 0,
          transform: null
        },
        autoStyleContainer: false
      },
      from: {
        color: '#FFEA82'
      },
      to: {
        color: '#ED6A5A'
      },
      step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
      }
    });
    // Number from 0.0 to 1.0


    var barPengalaman = new ProgressBar.Line(pengalaman, {
      strokeWidth: 4,
      easing: 'easeInOut',
      duration: 1400,
      color: '#FF681F',
      trailColor: 'white',
      trailWidth: 1,
      svgStyle: {
        width: '100%',
        height: '100%',
        borderRadius: '10px'
      },
      text: {
        style: {
          // Text color.
          // Default: same as stroke color (options.color)
          color: 'black',
          fontFamily: '"DINNextLTPro-Regular", Fallback, sans-serif',
          fontSize: '13px',
          position: 'absolute',
          right: '0',
          padding: 0,
          margin: 0,
          transform: null
        },
        autoStyleContainer: false
      },
      from: {
        color: '#FFEA82'
      },
      to: {
        color: '#ED6A5A'
      },
      step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
      }
    });


    $(window).scroll(function() {
      var hT = $('.js-content-home-choose').offset().top,
        hH = $('.js-content-home-choose').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();

      //if (document.getElementById("progressBar")) {
      if (wS > (hT + hH - wH) && (hT > wS) && (wS + wH > hT + hH)) {
        console.log("content home choose");
        barTrust.animate(1.0);
        barService.animate(0.98);
        barDone.animate(0.97);
        barPengalaman.animate(0.98);
        barSolid.animate(0.97);
      } else {
        barTrust.animate(0.02);
        barService.animate(0.02);
        barDone.animate(0.02);
        barPengalaman.animate(0.02);
        barSolid.animate(0.02);
      }
      //}
    });
  </script>

  <script type="text/javascript">
    $('.js-home-trip-slider').owlCarousel({
      dots: true,
      margin: 30,
      responsive: {
        240: {
          items: 1
        },
        480: {
          items: 2
        },
        768: {
          items: 3
        },
        992: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $('.js-content-testi-slider').owlCarousel({
      nav: true,
      dots: false,
      loop: true,
      slideBy: 2,
      navText: ['<i class="jgicon icon-chevron-left"></i>', '<i class="jgicon icon-arrow-right"></i>'],
      responsive: {
        0: {
          items: 1
        },
        640: {
          items: 1
        },
        768: {
          items: 1
        },
        1200: {
          items: 1,
          autoplay: true
        }
      }
    });
  </script>
  <script type="text/javascript">
    $('.js-content-client-slider').owlCarousel({
      nav: true,
      dots: false,
      loop: true,
      margin: 35,
      slideBy: 2,
      navText: ['<i class="jgicon icon-chevron-left"></i>', '<i class="jgicon icon-arrow-right"></i>'],
      responsive: {
        0: {
          items: 1
        },
        640: {
          items: 1
        },
        768: {
          items: 1
        },
        1200: {
          items: 1,
          autoplay: true
        }
      }
    });
  </script>
  <script type="text/javascript">
    $('.js-photo-slider').owlCarousel({
      loop: true,
      dots: false,
      responsive: {
        240: {
          slideBy: 6,
          items: 2
        },
        640: {
          slideBy: 3,
          items: 3
        },
        992: {
          items: 6,
          slideBy: 5,
          autoplay: true,
          animateOut: 'fadeOut',
          smartSpeed: 450
        },
        1200: {
          items: 6,
          slideBy: 5,
          autoplay: true,
          animateOut: 'fadeOut',
          smartSpeed: 450
        }
      }
    });
  </script>

  <script type="application/javascript" src="vendor/angle-vladov-mobile-slider/jquery.mobile-slider.min.js"></script>
  <script type="application/javascript">
    $(document).ready(function($) {
      $('.js-home-package-slider').mobileSlider({
        sliderWhen: 767,
        itemWidth: "85%",
        startAt: 2
      });
    });
  </script>

  <script type="text/javascript" src="vendor/scrolltofixed.1.0.8/jquery-scrolltofixed-min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.js-menu-cta-panel').scrollToFixed({
        postFixed: function() {
          $(".menu-cta-title").css('display', 'block');
        },
        preFixed: function() {
          $('.menu-cta-panel').addClass('mobile-menu-fixed');
          $('.menu-cta-panel').addClass('fade-in');
          $(".menu-cta-title").css('display', 'none');
          $(".footer-copyright").css('padding-bottom', '80px');
        }
      });
    });
  </script>
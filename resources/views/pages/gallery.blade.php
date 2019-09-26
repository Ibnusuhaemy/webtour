@extends('layouts.layout')

@section('content')
  <!-- Our Gallery -->
  <section class="content content-home-package content-gallery-list js-content-home-package">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="content-title">Our Gallery</h2>
          </div>
        </div>
        <div class="row">
          <div class="owl-carousel gallery-carousel home-package-slider">
              @foreach(array_chunk($data->galeri,3) as $chunk)
                <div class="col-md-12">
                  @foreach($chunk as $photo)
                  <a href={{$photo->url.$photo->directory.$photo->gambar_galeri}} data-toggle="lightbox" data-gallery="gallery" data-type="image">
                    <div class="panel panel-default">
                      <div class="panel-body card-single-body">
                        <img src={{$photo->url.$photo->directory.$photo->gambar_galeri}} width="960" height="960" alt="Jagadtour User Photo Gallery" class="img-responsive " class="img-fluid">
                      </div>
                    </div>
                  </a>
                  @endforeach
              </div>
           @endforeach
          </div>
        </div>
      </div>
    </section>
  
    <!-- Testimonial -->
    <section class="content content-testi content-testi-list">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="content-title content-testi-title">Testimonial</h2>
          </div>
        </div>
        <div class="row">
  
          <div class="owl-carousel testi-carousel content-testi-slider">
            @foreach (array_chunk($data->testimoni,2) as $chunk)
              <div class="col-md-12">
              @foreach ($chunk as $testi)
              <div class="item">
                  <div class="panel panel-default testi-slider-item">
                    <div class="panel-body">
                      <div class="media testi-slider-media">
                        <div class="media-left">
                          <a href="#">
                            <img src={{$testi->url.$testi->directory.$testi->foto_testimoni}} width="960" height="960" alt="Testimonial Putri Sahadaya di Jagadtour" class="media-object testi-slider-photo">
                          </a>
                        </div>
                        <div class="media-body media-middle">
                        <h4 class="media-heading testi-slider-name">{{$testi->nama_testimoni}}</h4>
                          <p class="testi-slider-city">{{$testi->kota_testimoni}}</p>
                          <p class="testi-slider-statement">
                              {{$testi->testimoni}}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach    
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
@endsection

@section('js')
<script type="text/javascript" src="vendor/owl-carousel.2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="vendor/ekko-lightbox/ekko-lightbox.min.js"></script>

<script>
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

</script>

<script type="text/javascript">
  $('.gallery-carousel').owlCarousel({
    loop: true,
    nav: true,
    navText: ['<i class="jgicon icon-chevron-left"></i>', '<i class="jgicon icon-arrow-right"></i>'],
    dots: false,
    items: 4,
    responsive: {
      0: {
        items: 1
      },
      479: {
        items: 2
      },
      639: {
        items: 2
      },
      767: {
        items: 3
      },
      1199: {
        items: 3
      },
      1200: {
        items: 4
      }
    }
  })

</script>

<script type="text/javascript">
  $('.testi-carousel').owlCarousel({
    loop: true,
    nav: true,
    navText: ['<i class="jgicon icon-chevron-left"></i>', '<i class="jgicon icon-arrow-right"></i>'],
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      992: {
        items: 2
      }
    }
  })

</script>

<script src="vendor/collapser/jquery.collapser.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.testi-slider-statement').collapser({
      mode: 'chars',
      truncate: 80,
      showText: 'Selengkapnya',
      hideText: 'Sembunyikan',
    });
  })

</script>

<script type="text/javascript" src="vendor/scrolltofixed.1.0.8/jquery-scrolltofixed-min.js"></script>
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
@endsection
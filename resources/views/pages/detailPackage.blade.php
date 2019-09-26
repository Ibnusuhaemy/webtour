@extends('layouts.layoutNoHeader')

@section('content')
@foreach ($data->data as $dataPaket)
  <!-- Package Detail -->
<section class="content content-packdetail">
    <div class="container">
      <div class="row wrapper">
         <div class="col-md-12 col-lg-9 packdetail-left">
 
         <h2 class="content-title title-package">{{$dataPaket->nama_paket}}</h2>
           <h2 class="content-title subtitle-package">{{$dataPaket->type}}</h2>
           <div class="content-packdetail-panel packdetail-destination">
             <div class="packdetail-destination-slider js-packdetail-destination-slider">
               @foreach ($dataPaket->destinasi as $item1)
               <div class="item">
                  <div class="destination-slider-image">
                    <!-- <img src="images/sliders/jagadtour-taman-rekreasi-selecta.jpg" width="800" height="445" alt="Paket Wisata Jagadtour"> -->
                    <img src={{$item1->url.$item1->directory.$item1->gambar_destinasi}} alt="Paket Wisata Jagadtour">
                  </div>
                  <!-- <div class="destination-slider-caption">
                    <p>Bromo</p>
                  </div> -->
                </div>     
               @endforeach
             </div>
             <div class="packdetail-destination-slider js-packdetail-destination-thumbnail">
                @foreach ($dataPaket->destinasi as $item2)
                <div class="item">
                   <div class="destination-slider-image">
                     <!-- <img src="images/sliders/jagadtour-taman-rekreasi-selecta.jpg" width="800" height="445" alt="Paket Wisata Jagadtour"> -->
                     <img src={{$item2->url.$item2->directory.$item2->gambar_destinasi}} alt="Paket Wisata Jagadtour">
                   </div>
                   <!-- <div class="destination-slider-caption">
                     <p>Bromo</p>
                   </div> -->
                 </div>     
                @endforeach
             </div>
           </div>
 
           <!-- Destinasi -->
           <div class="packdetail-contents destination-section">
             <div class="row packdetail-info">
               <div class="col-xs-6 col-lg-3">
                 <div class="media">
                   <div class="media-left">
                     <a href="#">
                       <i class="fa fa-clock-o"></i>
                     </a>
                   </div>
                   <div class="media-body">
                     <h4 class="media-heading">Durasi</h4>
                     <p>
                      <?php 
                      if($dataPaket->jam === null && $dataPaket->malam !== null  ){
                        echo $dataPaket->hari." hari ".$dataPaket->malam." malam";
                      }
                      elseif ($dataPaket->malam === null && $dataPaket->jam === null) {
                        echo $dataPaket->hari." hari";
                      }
                      elseif ($dataPaket->hari === null && $dataPaket->malam === null ) {
                        echo $dataPaket->jam." jam";
                      }
                      ?>
                     </p>
                   </div>
                 </div>
               </div>
               <div class="col-xs-6 col-lg-3">
                 <div class="media">
                   <div class="media-left">
                     <a href="#">
                       <i class="fa fa-users"></i>
                     </a>
                   </div>
                   <div class="media-body">
                     <h4 class="media-heading">Start Trip</h4>
                     <p>{{$dataPaket->start_trip}} WIB</p>
                   </div>
                 </div>
               </div>
               <div class="col-xs-6 col-lg-3">
                 <div class="media">
                   <div class="media-left">
                     <a href="#">
                       <i class="fa fa-flag"></i>
                     </a>
                   </div>
                   <div class="media-body">
                     <h4 class="media-heading">End Trip</h4>
                     <p>{{$dataPaket->end_trip}} WIB</p>
                   </div>
                 </div>
               </div>
               <div class="col-xs-6 col-lg-3">
                 <div class="media">
                   <div class="media-left">
                     <a href="#">
                       <i class="fa fa-briefcase"></i>
                     </a>
                   </div>
                   <div class="media-body">
                     <h4 class="media-heading">Meeting Point</h4>
                    <p>{{$dataPaket->meet_point}}</p>
                   </div>
                 </div>
               </div>
             </div>
 
           </div>
 
           <!-- Deskripsi Singkat -->
           <div class="packdetail-contents packdetail-facility">
            @php
              echo $dataPaket->overview;
            @endphp  
           </div>
 
           <!-- Fasilitas -->
           <div class="packdetail-contents packdetail-facility">
             <h2 class="content-title">Fasilitas</h2>
             <ul class="facility-list">
               @foreach ($dataPaket->fasilitas as $fasilitas)    
             <li class="facility-item"><span class="facility-box"><div class="facility-box_inner"></div></span>{{$fasilitas->fasilitas}}</li>
               @endforeach
             </ul>
           </div>
 
           <!-- Itinerary -->
           <div class="packdetail-contents">
             <h2 class="content-title">Itinerary</h2>
             <div class="panel-group card-group" id="js-package" role="tablist" aria-multiselectable="true">
               @foreach ($dataPaket->rencana as $key => $rencana)                   
               <div class="panel panel-default panel-complete content-packdetail-panel packdetail-itinerary">
                 <div class="panel-heading panel-complete-heading panel-heading-blue" role="tab" id="heading-itinerary">
                   <h4 class="panel-title panel-complete-title">
                     <a role="button" data-toggle="collapse" data-parent="#js-package" href={{"#js-package-itinerary-".$key}} aria-expanded="true" aria-controls="js-package-itinerary">
                       {{$rencana->rencana}}
                       <i class="glyphicon glyphicon-menu-down"></i>
                     </a>
                   </h4>
                 </div>
                 <div id={{"js-package-itinerary-".$key}} class="{{$key === 0 ? 'panel-collapse collapse in' : 'panel-collapse collapse'}}" role="tabpanel" aria-labelledby="heading-itinerary">
                   <div class="panel-body panel-complete-content packdetail-itinerary-detail">
                     <div class="media">
                       <div class="media-left">
                         <a href="#">
                           <img class="media-object" width="490" height="490" src={{$rencana->url.$rencana->directory.$rencana->gambar_rencana}} alt="Jagadtour Itinerary Image">
                         </a>
                       </div>
                       <div class="media-body">
                         @php
                             echo $rencana->deskripsi
                         @endphp
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               @endforeach
             </div>
           </div>
 
           <!-- FAQ -->
           <div class="packdetail-contents panel-heading-faqs">
             <h2 class="content-title">FAQ</h2>
             <div class="panel-group card-group" id="js-package-faq" role="tablist" aria-multiselectable="true">
              @foreach ($dataPaket->faqs as $key => $faq)
              <div class="panel panel-complete content-packdetail-panel packdetail-faqs">
                 <div class="panel-heading panel-complete-heading " role="tab" id="heading-itinerary">
                   <h4 class="panel-title panel-complete-title">
                     <a role="button" data-toggle="collapse" data-parent="#js-package-faq" href={{"#js-package-faq-".$key}} aria-expanded="true" aria-controls="js-package-itinerary">
                       {{$faq->pertanyaan}}
                       <i class="glyphicon glyphicon-menu-down"></i>
                     </a>
                   </h4>
                 </div>
                 <div id={{"js-package-faq-".$key}} class="{{$key === 0 ? 'panel-collapse collapse in' : 'panel-collapse collapse'}}" role="tabpanel" aria-labelledby="heading-itinerary">
                   <div class="panel-body panel-complete-content packdetail-itinerary-detail">
                    <p>{{$faq->jawaban}}</p>
                   </div>
                 </div>
                </div>
              @endforeach 
             </div>
           </div>
 
         </div>
 
         <div class="col-md-12 col-lg-3 packdetail-right">
 
           <!-- Price -->
           <div class="panel panel-default panel-complete content-packdetail-panel packdetail-price js-packdetail-price panel-left">
             <div class="panel-heading panel-complete-heading panel-heading-blue" role="tab" id="heading-facility">
               <h4 class="panel-title panel-complete-title">
                 <a role="button">Form Booking</a>
               </h4>
             </div>
             <div id="js-package-price" class="panel-collapse collapse in">
               <div class="panel-body panel-complete-content">
 
                 <!--
                 <h5 class="packdetail-price-title">Masukkan Jumlah Peserta &amp; pilih Kelas Hotel</h5>
                 <p class="packdetail-price-subtitle">Harga belum termasuk periode High Sesion Idul Fitri, Natal &amp; Tahun Baru</p>
                 -->
 
                 <form class="packdetail-price-form" action="checkout.php" method="post">
                   <div id="printDiv">
 
                     <div class="form-group">
                       <label for="date" class="control-label">Tanggal</label>
                       <div class="row">
                         <div class="col-md-12">
                           <input type="text" class="form-control" id="datetimepicker4" placeholder="Tanggal" name="date" value="">
                         </div>
                       </div>
                     </div>
 
                     <div class="form-group">
                       <label for="member" class="control-label">Jumlah Peserta</label>
                       <div class="row">
                         <div class="col-md-12">
                           <input type="text" class="form-control" id="old" placeholder="Dewasa" name="old" value="">
                         </div>
                         <div class="col-md-12">
                           <input type="text" class="form-control" id="kid" placeholder="Anak" name="kid" value="">
                         </div>
                       </div>
                       <span id="member-help" class="help-block">Untuk anak 5 tahun kebawah gratis</span>
                     </div>
                   </div>
 
                   <!--
                   <div class="form-group">
                     <button id="cekharga" type="button" class="btn btn-rounded btn-orange" onclick="cekaharga()">Cek Harga</button>
                   </div>
                   -->
 
                   <!--
                   <div class="form-group">
                     <div class="g-recaptcha" data-sitekey="6LfpmK8UAAAAABFxfsXkfagvooSbzW1Q2LhB14E4" required></div>
                   </div>
                   -->
 
                   <div class="form-group">
                     <div class="row">
                       <div class="col-xs-12">
                         <input type="submit" class="btn btn-rounded btn-orange" value="Cek Harga" name="send">
                       </div>
                       <div class="col-xs-12">
                         <input type="submit" class="btn btn-rounded btn-green" value="Booking Sekarang" name="send">
                       </div>
                       <div class="col-xs-12 price-form-socmed">
                         <p class="price-socmed-caption">Bagikan ?</p>
                         <ul class="list-inline">
                           <li><a href="#"><span class="jgicon icon-facebook"></span></a></li>
                           <li><a href="#"><span class="jgicon icon-twitter"></span></a></li>
                           <li><a href="#"><span class="jgicon icon-whatsapp"></span></a></li>
                           <li><a href="#"><span class="jgicon icon-print" id="pdfDownloader"></span></a></li>
                         </ul>
                       </div>
                     </div>
                   </div>
 
                 </form>
               </div>
             </div>
           </div>
         </div>
 
       </div>
 
       <hr class="package-separator js-package-separator">
       @endforeach
       <div class="row">
         <div class="col-xs-12">
           <h2 class="content-title">Paket Lainnya</h2>
         </div>
       </div>
    
       <div class="row">
         <div class="col-xs-12">
           <div class="owl-carousel owl-theme js-related-package-slider related-package-slider">
            @foreach ($data->paketlainnya as $paket)     
            <div class="item">
               <div class="packdetail-packother">
                 <a href="{{url ('/package-detail'.'/'.$paket->id)}}">
                   <div class="panel panel-default card-single">
                     <div class="panel-body card-single-body">
                       <img src={{$paket->url.$paket->directory.$paket->gambar_paket}} width="1035" height="642" alt="" class="img-responsive">
                       <div class="card-single-caption">
                         <p class="
                         <?php
                         if($paket->type == 'FAMILY TRIP'){
                           echo 'tag tag-orange card-single-tag';
                         }
                         elseif ($paket->type == 'CORPORATE TRIP'){
                           echo 'tag tag-blue card-single-tag';
                         }
                         else {
                           echo 'tag tag-green card-single-tag';
                         }
                        ?>
                         ">{{$paket->type}}</p>
                         <p class="card-single-title">{{$paket->nama_paket}}</p>
                         <p class="card-single-text">
                          <?php 
                          if($paket->jam === null && $paket->malam !== null  ){
                            echo $paket->hari." D ".$paket->malam." N";
                          }
                          elseif ($paket->malam === null && $paket->jam === null) {
                            echo $paket->hari." D";
                          }
                          elseif ($paket->hari === null && $paket->malam === null ) {
                            echo "1 D";
                          }
                          ?>
                         </p>
                       </div>
                     </div>
                   </div>
                 </a>
               </div>
             </div>
            @endforeach 
         </div>
       </div>
     </div>
   </section>  


  
@endsection
@section('js')
<script type="text/javascript" src="{{asset('vendor/moment.2.0.0/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/datetimepicker.4.17.42/js/bootstrap-datetimepicker.min.js')}}"></script>
<script type="text/javascript">
  $(function() {
    $('#datetimepicker4').datetimepicker({
      locale: 'id',
      format: 'DD/MMM/YYYY'
    });
  });
  </script>
    <!-- //---script owl carousel--// -->
    <script type="text/javascript">
        $('.js-related-package-slider').owlCarousel({
          loop: true,
          margin: 30,
          dots: false,
          nav: true,
          navText: ['<i class="jgicon icon-chevron-left"></i>', '<i class="jgicon icon-arrow-right"></i>'],
          responsive: {
            0: {
              items: 1
            },
            575: {
              items: 1
            },
            767:{
              items: 2
            },
            992:{
              items: 3
            },
            1200: {
              items: 3
            }
          }
        });
    
      </script>
    
      <!-- //---script slick carousel--// -->
      <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
      <script>
          $('.js-packdetail-destination-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.js-packdetail-destination-thumbnail',
            infinite: true,
            // autoplay: true
          });
          $('.js-packdetail-destination-thumbnail').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.js-packdetail-destination-slider',
            centerMode: true,
            focusOnSelect: true,
            prevArrow: '<i class="thumbnail-icon thumbnail-icon-left jgicon icon-chevron-left"></i>',
            nextArrow: '<i class="thumbnail-icon thumbnail-icon-right jgicon icon-arrow-right"></i>',
            responsive: [
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 576,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
          });
      </script>
@endsection
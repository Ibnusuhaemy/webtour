@extends('layouts.layout')

@section('content')
      <!-- 1 day -->
  <section class="content content-home-package">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="trip content-title">1 day</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="owl-carousel corporate-one js-corporate-one owl-theme">
                @foreach ($data->oneday as $dataOne)                   
                <div class="item">
                  <div class="packdetail-packother card-single">
                    <a href="{{url ('/package-detail'.'/'.$dataOne->id)}}">
                      <div class="panel panel-default card-single">
                        <div class="panel-body card-single-body">
                          <img src={{$dataOne->url.$dataOne->directory.$dataOne->gambar_paket}} width="1035" height="642" alt="" class="img-responsive">
                          <div class="card-single-caption">
                            <p class="tag tag-blue card-single-tag">{{$dataOne->type}}</p>
                            <p class="card-single-title">{{$dataOne->nama_paket}}</p>
                            <p class="card-single-text">
                                <?php 
                                if($dataOne->jam === null && $dataOne->malam !== null  ){
                                  echo $dataOne->hari." D ".$dataOne->malam." N";
                                }
                                elseif ($dataOne->malam === null && $dataOne->jam === null) {
                                  echo $dataOne->hari." D";
                                }
                                elseif ($dataOne->hari === null && $dataOne->malam === null ) {
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
          <div class="row">
            <div class="col-xs-12">
              <hr class="package-separator">
            </div>
          </div>
        </div>
      </section>
    
      <!-- 2 day -->
      <section class="content content-home-package">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="trip content-title">2 day</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="owl-carousel corporate-two js-corporate-two owl-theme">
                  @foreach ($data->twoday as $dataTwo)                   
                  <div class="item">
                    <div class="packdetail-packother card-single">
                      <a href="{{url ('/package-detail'.'/'.$dataTwo->id)}}">
                        <div class="panel panel-default card-single">
                          <div class="panel-body card-single-body">
                            <img src={{$dataTwo->url.$dataTwo->directory.$dataTwo->gambar_paket}} width="1035" height="642" alt="" class="img-responsive">
                            <div class="card-single-caption">
                              <p class="tag tag-blue card-single-tag">{{$dataTwo->type}}</p>
                              <p class="card-single-title">{{$dataTwo->nama_paket}}</p>
                              <p class="card-single-text">
                                  <?php 
                                  if($dataTwo->jam === null && $dataTwo->malam !== null  ){
                                    echo $dataTwo->hari." D ".$dataTwo->malam." N";
                                  }
                                  elseif ($dataTwo->malam === null && $dataTwo->jam === null) {
                                    echo $dataTwo->hari." D";
                                  }
                                  elseif ($dataTwo->hari === null && $dataTwo->malam === null ) {
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
            <div class="row">
              <div class="col-xs-12">
                <hr class="package-separator">
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <!-- Testimonial -->
      <section class="content content-testi content-testi-home content-test-corporate">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="content-title content-testi-title">Testimonials</h2>
              <p class="media-content-testi">Apa kata mereka setelah menggunakan jasa Jagad Tour</p>
              <div class="owl-carousel owl-theme content-testi-slider js-content-testi-slider">
                  @foreach ($dataTesti as $data)
                  <div class="item">
                      <div class="panel panel-default testi-slider-item">
                        <div class="panel-body">
                          <div class="media testi-slider-media">
                            <div class="media-body media-middle">
                              <a class="home" href="#">
                                <img src={{$data->url.$data->directory.$data->foto_testimoni}} width="960" height="960" alt="Testimonial Putri Sahadaya di Jagadtour" class="media-object testi-slider-photo">
                              </a>
                              <div class="home-comment">
                                <h4 class="media-heading testi-slider-name">{{$data->nama_testimoni}} - <span class="testi-slider-city">{{$data->kota_testimoni}}</span></h4>
                                <p class="testi-slider-statement">
                                  {{$data->testimoni}}
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
              </div>
              <a href="gallery-testi.php" style="text-decoration: none;">
                <p class="media-content-testi-link">Baca Lainnya</p>
              </a>
            </div>
            <div class="col-md-6">
              <h2 class="content-title content-testi-title">Our Happy Clients</h2>
              <p class="media-content-testi">Mereka sudah mempercayakan tripnya kepada kami, giliran Anda selanjutnya</p>
              <div class="owl-carousel owl-theme content-client-slider js-content-client-slider">
                <div class="item">
                  <ul class="list-inline happy-clients">
                    <li class="happy-client-item">
                      <img src="images/clients/aiesec_jakarta.jpg" width="596" height="84" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/bank_bri.jpg" width="1600" height="824" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/bhayangkari_seruyan.jpg" width="962" height="863" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/bps_kota_palu.jpg" width="1024" height="576" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/dharma_wanita_samarinda.jpg" width="400" height="300" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/dinas_kesehatan_muara_enim.jpg" width="174" height="200" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pertamina_gas.jpg" width="174" height="200" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/jict_jakarta.jpg" width="174" height="200" class="img-responsive">
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <ul class="list-inline happy-clients">
                    <li class="happy-client-item">
                      <img src="images/clients/sma_taruna_bumi_khatulistiwa.jpg" width="596" height="84" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_prisma_harapan.jpg" width="1600" height="824" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_ray_cipta_mandiri.jpg" width="962" height="863" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_star_concord_indonesia.jpg" width="1024" height="576" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_sucofindo_jakarta.jpg" width="400" height="300" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/smk_muhammadiyah.jpg" width="174" height="200" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/iwaba_bengkulu.jpg" width="174" height="200" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/jasa_marga_balikpapan.jpg" width="174" height="200" class="img-responsive">
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <ul class="list-inline happy-clients">
                    <li class="happy-client-item">
                      <img src="images/clients/kabupaten_bungo.jpg" width="596" height="84" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/kemendikbud.jpg" width="1600" height="824" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/kemenkumham.jpg" width="962" height="863" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/kementrian_kesehatan_ri.jpg" width="1024" height="576" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/maestro_law_affice_jakarta.jpg" width="400" height="300" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/makassar_terminal_services.jpg" width="174" height="200" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pr_reska_multi_usaha.jpg" width="174" height="200" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_bayan_resources.jpg" width="174" height="200" class="img-responsive">
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <ul class="list-inline happy-clients">
                    <li class="happy-client-item">
                      <img src="images/clients/pt_juke_solusi.jpg" width="596" height="84" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_kompindo_fontana_raya.jpg" width="1600" height="824" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_mitrasetia_jaya_group.jpg" width="962" height="863" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_ptp_tanjung_priok.jpg" width="1024" height="576" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_pundi_mitra_kencana.jpg" width="400" height="300" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_setia_sapta.jpg" width="174" height="200" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pt_talbia_jakarta.jpg" width="174" height="200" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/pwp_ru_pakning.jpg" width="174" height="200" class="img-responsive">
                    </li>
                  </ul>
                </div>
                <div class="item">
                  <ul class="list-inline happy-clients">
                    <li class="happy-client-item">
                      <img src="images/clients/telkom.jpg" width="596" height="84" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/tmim_sunter.jpg" width="1600" height="824" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/trisakti.jpg" width="962" height="863" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/united_asia_futures.jpg" width="1024" height="576" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/universitas_negeri_padang.jpg" width="400" height="300" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/yayasan_nurul_hikmah_jakarta.jpg" width="174" height="200" class="img-responsive">
                    </li>
                    <li class="happy-client-item">
                      <img src="images/clients/yeos_family.jpg" width="174" height="200" class="img-responsive">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection

@section('js')
<script type="text/javascript" src="vendor/owl-carousel.2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript">
  $('.js-corporate-one').owlCarousel({
    loop: true,
    nav: true,
    navText: ['<i class="jgicon icon-chevron-left"></i>', '<i class="jgicon icon-arrow-right"></i>'],
    dots: false,
    margin: 15,
    responsive: {
      0: {
        items: 1
      },
      479: {
        items: 1
      },
      639: {
        items: 2
      },
      767: {
        items: 2
      },
      1199: {
        items: 3
      }
    }
  })

</script>

<script type="text/javascript">
  $('.js-corporate-two').owlCarousel({
    loop: true,
    nav: true,
    navText: ['<i class="jgicon icon-chevron-left"></i>', '<i class="jgicon icon-arrow-right"></i>'],
    dots: false,
    margin: 15,
    responsive: {
      0: {
        items: 1
      },
      479: {
        items: 1
      },
      639: {
        items: 2
      },
      767: {
        items: 2
      },
      1199: {
        items: 3
      }
    }
  })

</script>

<script type="text/javascript">
  $('.js-content-testi-slider').owlCarousel({
    nav: true,
    navText: ['<i class="jgicon icon-chevron-left"></i>', '<i class="jgicon icon-arrow-right"></i>'],
    dots: false,
    loop: true,
    slideBy: 2,
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
    navText: ['<i class="jgicon icon-chevron-left"></i>', '<i class="jgicon icon-arrow-right"></i>'],
    dots: false,
    loop: true,
    margin: 35,
    slideBy: 2,
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
@endsection
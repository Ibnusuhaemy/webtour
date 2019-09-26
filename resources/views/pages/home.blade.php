@extends('layouts.layoutHome')

@section('title' , $title)


@section('hero-header')
  <section class="hero">
        <div class="hero-home">
          <video class="hero-video" width="100%" autoplay loop>
            <source src="video/landing.mp4" type="video/mp4">
          </video>
          <div class="button show-mobile">
            <a href="https://www.youtube.com/watch?v=DQPXRp3Ac1U" target="_blank">
              <p class="hero-mobile-button">Selengkapnya klik disini</p>
            </a>
          </div>
        </div>
  </section>
      <!-- Mobile Custom Menu -->
      <section class="content content-mobile-menu">
        <div class="container show-mobile">
          <div class="row">
            <div class="col-xs-12">
              <ul class="list-inline mobile-menu-list">
                <li class="mobile-menu-item">
                  <a href={{ url('/family-trip')}}>
                    <div class="panel panel-default mobile-menu-panel mobile-menu-panel-blue">
                      <div class="panel-body">
                        <span class="jgicon icon-car mobile-menu-icon"></span>
                        <p class="mobile-menu-text">Family Trip</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mobile-menu-item">
                  <a href={{ url('/corporate-trip')}}>
                    <div class="panel panel-default mobile-menu-panel mobile-menu-panel-green">
                      <div class="panel-body">
                        <span class="jgicon icon-bus mobile-menu-icon"></span>
                        <p class="mobile-menu-text">Corporate Trip</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mobile-menu-item">
                  <a href="#">
                    <div class="panel panel-default mobile-menu-panel mobile-menu-panel-orange">
                      <div class="panel-body">
                        <span class="jgicon icon-magic-wand mobile-menu-icon"></span>
                        <p class="mobile-menu-text">Custom Trip</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mobile-menu-item">
                  <a href={{ url('/gallery-testimoni')}}>
                    <div class="panel panel-default mobile-menu-panel mobile-menu-panel-blue">
                      <div class="panel-body">
                        <span class="jgicon icon-star-fill mobile-menu-icon"></span>
                        <p class="mobile-menu-text">Gallery</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mobile-menu-item">
                  <a href={{ url('/blog')}}>
                    <div class="panel panel-default mobile-menu-panel mobile-menu-panel-green">
                      <div class="panel-body">
                        <span class="jgicon icon-news mobile-menu-icon"></span>
                        <p class="mobile-menu-text">Blog</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mobile-menu-item">
                  <a href={{ url('/contact')}}>
                    <div class="panel panel-default mobile-menu-panel mobile-menu-panel-orange">
                      <div class="panel-body">
                        <span class="jgicon icon-call mobile-menu-icon"></span>
                        <p class="mobile-menu-text">Contact Us</p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mobile-menu-cta">
            <div class="col-xs-12">
              <p class="menu-cta-title">Ada Pertanyaan? Kontak Kami</p>
              <div class="panel panel-default menu-cta-panel js-menu-cta-panel animated">
                <div class="panel-body">
                  <ul class="list-inline menu-cta-list">
                    <li class="menu-cta-item"><a href="tel:+62878889992"><img class="img-responsive" src="images/icons/jagadtour-whatsapp.png" width="124" height="126" alt=""></a></li>
                    <li class="menu-cta-item"><a href="mailto:halo@jagadtour.com"><span class="fa fa-envelope-o"></span></a></li>
                    <li class="menu-cta-item"><a href="tel:+62878889992"><span class="fa fa-phone"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('popular-package')
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="content-title">Popular Package</h2>
          </div>
        </div>
        <div class="home-package-slider js-home-package-slider">
          <ul class="row">
            @foreach ($data as $data)
            <li class="col-sm-6 col-md-4">
              <div class="packdetail-packother card-single">
                <a href="{{url ('/package-detail'.'/'.$data->id)}}">
                    <div class="panel panel-default card-single">
                      <div class="panel-body card-single-body">
                        <img src={{$data->url.$data->directory.$data->gambar_paket}} width="1035" height="642" alt="" class="img-responsive">
                        <div class="card-single-caption">
                        <p class="
                          <?php
                            if($data->type == 'FAMILY TRIP'){
                              echo 'tag tag-orange card-single-tag';
                            }
                            elseif ($data->type == 'CORPORATE TRIP'){
                              echo 'tag tag-blue card-single-tag';
                            }
                            else {
                              echo 'tag tag-green card-single-tag';
                            }
                           ?>
                          ">{{$data->type}}</p>
                          <p class="card-single-title">{{$data->nama_paket}}</p>
                          <p class="card-single-text">
                              <?php 
                              if($data->jam === null && $data->malam !== null  ){
                                echo $data->hari." D ".$data->malam." N";
                              }
                              elseif ($data->malam === null && $data->jam === null) {
                                echo $data->hari." D";
                              }
                              elseif ($data->hari === null && $data->malam === null ) {
                                echo "1 D";
                              }
                            ?> 
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </li>
              @endforeach
          </ul>
        </div>
      </div>
@endsection

@section('trip-category')
      <div class="container">
        <div class="owl-carousel owl-theme home-trip-slider js-home-trip-slider">
          <div class="item">
            <div class="panel panel-default trip-slider-panel trip-slider-family">
              <div class="panel-body">
                <h3 class="trip-panel-title">Family Trip</h3>
                <p class="trip-panel-desc"> Pilihan paket wisata dan tour yang cocok bagi anda dan keluarga dengan jumlah kurang dari 20 orang</p>
                <a href="package.php" class="btn btn-box btn-orange trip-panel-btn">Cek Paket</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="panel panel-default trip-slider-panel trip-slider-corporate">
              <div class="panel-body">
                <h3 class="trip-panel-title">Corporate Trip</h3>
                <p class="trip-panel-desc">Pilihan Paket wisata dan tour yang cocok untuk perusahaan atau instansi anda dengan peserta lebih dari 20 orang</p>
                <a href="package.php" class="btn btn-box btn-orange trip-panel-btn">Cek Paket</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="panel panel-default trip-slider-panel trip-slider-custom">
              <div class="panel-body">
                <h3 class="trip-panel-title">Custom Trip</h3>
                <p class="trip-panel-desc">Buat sendiri list tour dan wisata dengan pilihan destinasi favorit anda</p>
                <a href="package.php" class="btn btn-box btn-orange trip-panel-btn">Cek Paket</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="panel panel-default trip-slider-panel trip-slider-help">
              <div class="panel-body">
                <img src="images/icons/jagadtour-whatsapp.png" width="132" height="134" alt="Jagatour Whatsapp Contact" class="help-trip-whatsapp">
                <h3 class="trip-panel-title">Butuh Bantuan</h3>
                <p class="trip-panel-desc">Hubungi admin Jagad Tour bila anda memiliki pertanyaan tentang paket wisata</p>
                <a href="https://web.whatsapp.com/send?phone=628113785758" class="btn btn-box btn-orange trip-panel-btn">Chat Admin</a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('choose')
<div class="container">
  <div class="row">
    <h2 class="content-title">Alasan Mereka Memilih Jagad Tour</h2>
  </div>
  <div class="row">
    <div class="col-md-5">
      <div class="media home-choose-media">
        <div class="media-left choose-media-image" id="progressBar">
        </div>
        <div class="media-body media-middle choose-media-desc">
          <h4 class="media-heading">Trusted</h4>
          <div id="terpercaya" class="choose-progressbar"></div>
          <p class="media-content">
            Karena Legalitas perusahaan sangat jelas
          </p>
        </div>
      </div>
      <div class="media home-choose-media">
        <div class="media-left choose-media-image">
        </div>
        <div class="media-body media-middle choose-media-desc">
          <h4 class="media-heading">Tim Profesional</h4>
          <div id="solid" class="choose-progressbar"></div>
          <p class="media-content">
            Karena Tim kami Solid dan all out di setiap project
          </p>
        </div>
      </div>
      <div class="media home-choose-media">
        <div class="media-left choose-media-image">
        </div>
        <div class="media-body media-middle choose-media-desc">
          <h4 class="media-heading">Service Terbaik</h4>
          <div id="service" class="choose-progressbar"></div>
          <p class="media-content">
            Karena dari segi apapun, kami Beda dari yang lain
          </p>
        </div>
      </div>
      <div class="media home-choose-media">
        <div class="media-left choose-media-image">
        </div>
        <div class="media-body media-middle choose-media-desc">
          <h4 class="media-heading">Terima Beres</h4>
          <div id="done" class="choose-progressbar"></div>
          <p class="media-content">
            Karena Sudah kami siapkan dengan sempurna
          </p>
        </div>
      </div>
      <div class="media home-choose-media">
        <div class="media-left choose-media-image">
        </div>
        <div class="media-body media-middle choose-media-desc">
          <h4 class="media-heading">Paling Berpengalaman</h4>
          <div id="pengalaman" class="choose-progressbar"></div>
          <p class="media-content">
            Karena jam terbang tim kami diatas rata – rata
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-7 hidden-mobile">
      <div class="panel panel-default home-choose-founder">
        <div class="panel-body">
          <h5 class="choose-founder-title">Pesan dari Founder</h5>
          <p class="choose-founder-desc">
            Misi kami sederhana yaitu bagaimana kami bisa memberi kebahagiaan lebih
            kepada semua customers kami
          </p>
          <p class="choose-founder-desc">
            serta membuat sebuah perjalanan yang tidak
            hanya sebatas jalan – jalan dan menikmati destinasi wisata
          </p>
          <p class="choose-founder-desc">
            tetapi menyelipkan
            kepedulian dan kepekaan terhadap sesama
          </p>
          <p class="choose-founder-desc">
          </p>
          <cite class="choose-founder-name">- Ikhwanul Ma'arif</cite>
          <img class="choose-founder-photo" src="images/photos/founder.png" width="735" height="1173" alt="Ikhwanul Maarif, founder Jagadtour">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('testimonial')
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
@endsection
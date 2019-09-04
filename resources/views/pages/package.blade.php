@extends('layouts.layout')

@section('content')

    <!-- Hero Slider -->
    <section class="hero hero-package">
    <div class="hero-slider">
        <img src="images/sliders/jagadtour-batu.jpg" width="1440" height="473" alt="Jagadtour Image Slider" class="img-responsive">
        <div class="hero-slider-content">
        <div class="container">
            <div class="row">
            <div class="col-xs-12">
                <div class="cover">
                <div class="slider-content-tag">Corporate Trip</div>
                <div class="slider-content-title">Explore Malang &amp; Kota Batu 2D1N</div>
                <ul class="list-inline slider-content-info">
                    <li>
                    <div class="slider-info-icon"><i class="jgicon icon-clock"></i></div>
                    <div class="slider-info-text"><p>2 Hari</p></div>
                    </li>
                    <li>
                    <div class="slider-info-icon"><i class="jgicon icon-map"></i></div>
                    <div class="slider-info-text"><p>5 Tempat</p></div>
                    </li>
                    <li>
                    <div class="slider-info-icon"><i class="jgicon icon-chart"></i></div>
                    <div class="slider-info-text"><p>2 Kota</p></div>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- Package Detail -->
    <section class="content content-packdetail">
        <div class="container">
            <div class="row">
            <div class="col-md-8 packdetail-left">
                <h2 class="content-title">Detail Packages</h2>                  
            <div class="panel-group card-group" id="js-package" role="tablist" aria-multiselectable="true">
                
        <!-- Destinasi -->
        <div class="panel panel-default panel-complete content-packdetail-panel packdetail-destination">
            <div class="panel-heading panel-complete-heading panel-heading-blue" role="tab" id="heading-destination">
            <h4 class="panel-title panel-complete-title">
                <a role="button" data-toggle="collapse" data-parent="#js-package" href="#js-package-destination" aria-expanded="true" aria-controls="js-package-destination">Destinasi</a>
            </h4>
            </div>
            <div id="js-package-destination" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-destination">
            <div class="panel-body panel-complete-content">
                <div class="owl-carousel owl-theme packdetail-destination-slider js-packdetail-destination-slider">
                <div class="item">
                    <div class="destination-slider-image">
                    <img src="images/thumbnails/jagadtour-paket-selecta.jpg" width="206" height="178" alt="Paket Wisata Jagadtour">
                    </div>
                    <div class="destination-slider-caption"><p>Selecta</p></div>
                </div>
                <div class="item">
                    <div class="destination-slider-image">
                    <img src="images/thumbnails/jagadtour-paket-jatimpark-1.jpg" width="206" height="178" alt="Paket Wisata Jagadtour">
                    </div>
                    <div class="destination-slider-caption"><p>JatimPark 1</p></div>
                </div>
                <div class="item">
                    <div class="destination-slider-image">
                    <img src="images/thumbnails/jagadtour-paket-museum-angkot.jpg" width="206" height="178" alt="Paket Wisata Jagadtour">
                    </div>
                    <div class="destination-slider-caption"><p>Museum Angkot</p></div>
                </div>
                <div class="item">
                    <div class="destination-slider-image">
                    <img src="images/thumbnails/jagadtour-paket-jatimpark-1.jpg" width="206" height="178" alt="Paket Wisata Jagadtour">
                    </div>
                    <div class="destination-slider-caption"><p>JatimPark 1</p></div>
                </div>
                </div>
            </div>
            </div>
        </div>

    <!-- Itinerary -->
    <div class="panel panel-default panel-complete content-packdetail-panel packdetail-itinerary">
        <div class="panel-heading panel-complete-heading panel-heading-blue" role="tab" id="heading-itinerary">
            <h4 class="panel-title panel-complete-title">
            <a role="button" data-toggle="collapse" data-parent="#js-package" href="#js-package-itinerary" aria-expanded="true" aria-controls="js-package-itinerary">Itinerary</a>
            </h4>
        </div>
        <div id="js-package-itinerary" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-itinerary">
    <div class="panel-body panel-complete-content">
        <div class="packdetail-itinerary-list hidden-large-mobile">
                <img src="images/itinerary/group-30.png" width="660" height="669" class="img-responsive" alt="Jagadtour Timeline Tour">
                </div>
                <ul class="packdetail-itinerary-info hidden-large-mobile">
                <li>
                    <p>
                    * Itinerary diatas tidak baku, jadwal sewaktu-waktu bisa berubah sesuai kodisi di lapangan 
                    tanpa mengganggu agenda secara keseluruhan
                    </p>
                </li>
                <li>
                    <p>* Jadwal bisa kami sesuaikan dengan Jam kedatangan dan Kepulangan Anda</p>
                </li>
                </ul>
                
                <button type="button" class="btn btn-rounded btn-orange show-large-mobile" data-toggle="modal" data-target="#js-modal-itinerary">Tampilkan Itinerary</button>
                
                <div class="modal fade packdetail-itinerary-modal" id="js-modal-itinerary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Itinerary</h4>
                    </div>
                    <div class="modal-body">
                        <div class="packdetail-itinerary-list">
                        <div class="table-responsive">
                            <img src="images/itinerary/group-30.png" width="660" height="669" alt="Jagadtour Timeline Tour">
                        </div>
                        </div>
                        <ul class="packdetail-itinerary-info">
                        <li>
                            <p>
                            * Itinerary diatas tidak baku, jadwal sewaktu-waktu bisa berubah sesuai kodisi di lapangan 
                            tanpa mengganggu agenda secara keseluruhan
                            </p>
                        </li>
                        <li>
                            <p>* Jadwal bisa kami sesuaikan dengan Jam kedatangan dan Kepulangan Anda</p>
                        </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-rounded btn-orange" data-dismiss="modal">Tutup</button>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>

        <!-- Fasilitas -->
        <div class="panel panel-default panel-complete content-packdetail-panel packdetail-facility">
            <div class="panel-heading panel-complete-heading panel-heading-blue" role="tab" id="heading-facility">
                <h4 class="panel-title panel-complete-title">
                <a role="button" data-toggle="collapse" data-parent="#js-package" href="#js-package-facility" aria-expanded="true" aria-controls="js-package-facility">Fasilitas</a>
                </h4>
            </div>
            <div id="js-package-facility" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-facility">
                <div class="panel-body panel-complete-content">
                <div class="owl-carousel owl-theme js-package-facility-slider">
                    <div class="item">
                    <div class="packdetail-facility-item">
                        <div class="facility-item-icon">
                        <div class="facility-icon text-left">
                            <span class="jgicon icon-restaurant"></span>
                        </div>
                        <div class="facility-icon text-right">
                            <span class="jgicon icon-free"></span>
                        </div>
                        </div>
                        <div class="facility-item-teks">
                        <p>Makan gratis untuk 2 hari</p>
                        </div>
                    </div>
                    </div>
                    <div class="item">
                    <div class="packdetail-facility-item">
                        <div class="facility-item-icon">
                        <div class="facility-icon text-left">
                            <span class="jgicon icon-wifi"></span>
                        </div>
                        <div class="facility-icon text-right">
                            <span class="jgicon icon-free"></span>
                            <span class="jgicon icon-parking"></span>
                        </div>
                        </div>
                        <div class="facility-item-teks">
                        <p>Gratis internet ketika touring</p>
                        </div>
                    </div>
                    </div>
                    <div class="item">
                    <div class="packdetail-facility-item">
                        <div class="facility-item-icon">
                        <div class="facility-icon text-left">
                            <span class="jgicon icon-people-walk"></span>
                        </div>
                        </div>
                        <div class="facility-item-teks">
                        <p>Bebas tour kota malam hari</p>
                        </div>
                    </div>
                    </div>
                    <div class="item">
                    <div class="packdetail-facility-item">
                        <div class="facility-item-icon">
                        <div class="facility-icon text-left">
                            <span class="jgicon icon-car"></span>
                        </div>
                        <div class="facility-icon text-right">
                            <span class="jgicon icon-parking"></span>
                        </div>
                        </div>
                        <div class="facility-item-teks">
                        <p>Antar jemput dari stasiun dll</p>
                        </div>
                    </div>
                    </div>
                    <div class="item">
                    <div class="packdetail-facility-item">
                        <div class="facility-item-icon">
                        <div class="facility-icon text-left">
                            <span class="jgicon icon-car"></span>
                        </div>
                        <div class="facility-icon text-right">
                            <span class="jgicon icon-parking"></span>
                        </div>
                        </div>
                        <div class="facility-item-teks">
                        <p>Antar jemput dari stasiun dll</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Price -->
            <div class="panel panel-default panel-complete content-packdetail-panel packdetail-price">
                <div class="panel-heading panel-complete-heading panel-heading-blue" role="tab" id="heading-facility">
                    <h4 class="panel-title panel-complete-title">
                    <a role="button" data-toggle="collapse" data-parent="#js-package" href="#js-package-price" aria-expanded="true" aria-controls="js-package-price">Tentukan Harga Paket</a>
                    </h4>
                </div>
                <div id="js-package-price" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-facility">
                    <div class="panel-body panel-complete-content">
                    <h5 class="packdetail-price-title">Masukkan Jumlah Peserta &amp; pilih Kelas Hotel</h5>
                    <p class="packdetail-price-subtitle">Harga belum termasuk periode High Sesion Idul Fitri, Natal &amp; Tahun Baru</p>
                    <form class="packdetail-price-form" action="package.php" method="post">
                    <div id="printDiv">
                    <div class="form-group">
                        <label for="member" class="control-label">Identitas Pemesan</label>
                        <div class="row">
                            <div class="col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="" required>
                            </div>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="namaPemesan" value="" required>
                            </div>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="nomor" placeholder="No.Telp" name="telp" value="" required>
                            </div>
                        </div>
                        <span id="member-help" class="help-block">Mohon diisi sesuai dengan ketentuan</span>
                        </div>
                        <div class="form-group">
                        <label for="member" class="control-label">Jumlah Peserta</label>
                        <div class="row">
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="old" placeholder="Dewasa" name="old" value="">
                            </div>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="kid" placeholder="Anak" name="kid" value="">
                            </div>
                        </div>
                        <span id="member-help" class="help-block">Untuk anak 3 tahun kebawah gratis</span>
                        </div>
                        <div class="form-group">
                        <label for="hotel" class="control-label">Kelas Hotel</label>
                        <ul class="list-inline radio-list">
                            <li>
                            <div class="radio-container">
                                <div class="radio">
                                <label class="radio-label">
                                    <input type="radio" name="star" id="star_1" value="1000000">
                                    <label class="radio-panel" for="star_1">
                                    <i class="jgicon icon-star-blank"></i>
                                    </label>
                                </label>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="radio-container">
                                <div class="radio">
                                <label class="radio-label">
                                    <input type="radio" name="star" id="star_2" value="2000000">
                                    <label class="radio-panel" for="star_2">
                                    <i class="jgicon icon-star-blank"></i>
                                    <i class="jgicon icon-star-blank"></i>
                                    </label>
                                </label>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="radio-container">
                                <div class="radio">
                                <label class="radio-label">
                                    <input type="radio" name="star" id="star_3" value="3000000">
                                    <label class="radio-panel" for="star_3">
                                    <i class="jgicon icon-star-blank"></i>
                                    <i class="jgicon icon-star-blank"></i>
                                    <i class="jgicon icon-star-blank"></i>
                                    </label>
                                </label>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="radio-container">
                                <div class="radio">
                                <label class="radio-label">
                                    <input type="radio" name="star" id="star_4" value="5000000">
                                    <label class="radio-panel" for="star_4">
                                    <i class="jgicon icon-star-blank"></i>
                                    <i class="jgicon icon-star-blank"></i>
                                    <i class="jgicon icon-star-blank"></i>
                                    <i class="jgicon icon-star-blank"></i>
                                    </label>
                                </label>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="radio-container">
                                <div class="radio">
                                <label class="radio-label">
                                    <input type="radio" name="star" id="star_5" value="8000000">
                                    <label class="radio-panel" for="star_5">
                                    <i class="jgicon icon-star-blank"></i>
                                    <i class="jgicon icon-star-blank"></i>
                                    <i class="jgicon icon-star-blank"></i>
                                    <i class="jgicon icon-star-blank"></i>
                                    <i class="jgicon icon-star-blank"></i>
                                    </label>
                                </label>
                                </div>
                            </div>
                            </li>
                        </ul>
                        <span id="member-help" class="help-block">Pilihan diatas adalah kelas bintang hotel</span>
                        </div>
                        <div class="form-group form-block price-form-block">
                        <div class="row">
                            <div class="col-xs-12">
                            <label class="control-label">Total Paket</label>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-5">
                            <p><span class="jgicon icon-user"></span> Dewasa</p>
                            </div>
                            <div class="col-xs-7 form-block-right">
                            <p><span class="count" id="jumlahDewasa"></span> <span class="sub-price">Rp 1.000.000</span></p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-5">
                            <p><span class="jgicon icon-user-group"></span> Anak</p>
                            </div>
                            <div class="col-xs-7 form-block-right">
                            <p><span class="count" id="jumlahAnak"></span><span class="sub-price">Rp 500.000</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5">
                            <p><span class="jgicon price-form-star icon-star-fill"></span> Kelas Hotel</p>
                            </div>
                            <div class="col-xs-7 form-block-right">
                            <p><span class="count" ></span> <span class="sub-price" id="kelasHotel"></span></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-5">
                            <p>Grand Total</p>
                            </div>
                            <div class="col-xs-7 form-block-right">
                            <p><span class="sub-price" id="total"></span></p>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                                <button id="cekharga" type="button" class="btn btn-rounded btn-orange" onclick="cekaharga()">Cek Harga</button>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfpmK8UAAAAABFxfsXkfagvooSbzW1Q2LhB14E4" required></div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                            <input type="submit" class="btn btn-rounded btn-green" value="Booking Sekarang" name="send">
                            </div>
                            <div class="col-md-6">
                            <ul class="list-inline price-form-socmed">
                                <li><p class="price-socmed-caption">Bagikan ?</p></li>
                                <li><span class="jgicon icon-facebook"></span></li>
                                <li><span class="jgicon icon-twitter"></span></li>
                                <li><span class="jgicon icon-whatsapp"></span></li>
                                <li><span class="jgicon icon-print" id="pdfDownloader"></span></li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
                </div>

                <h2 class="content-title">Testimonials</h2>
                <div class="owl-carousel owl-theme content-testi-slider js-content-testi-slider">
                  <div class="item">
                    <div class="panel panel-default testi-slider-item">
                      <div class="panel-body">
                        <p class="testi-slider-statement">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                          been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <div class="media testi-slider-media">
                          <div class="media-left">
                            <a href="#">
                              <img src="images/photos/putri-sahadaya.png" width="104" height="104" alt="Testimonial Putri Sahadaya di Jagadtour" class="media-object testi-slider-photo">
                            </a>
                          </div>
                          <div class="media-body media-middle">
                            <h4 class="media-heading testi-slider-name">Putri Sahadaya</h4>
                            <p class="testi-slider-city">Bandung</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="panel panel-default testi-slider-item">
                      <div class="panel-body">
                        <p class="testi-slider-statement">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                          been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <div class="media testi-slider-media">
                          <div class="media-left">
                            <a href="#">
                              <img src="images/photos/thomas-budi.png" width="104" height="104" alt="Testimonial Thomas Budi di Jagadtour" class="media-object testi-slider-photo">
                            </a>
                          </div>
                          <div class="media-body media-middle">
                            <h4 class="media-heading testi-slider-name">Thomas Budi</h4>
                            <p class="testi-slider-city">Surabaya</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="panel panel-default testi-slider-item">
                      <div class="panel-body">
                        <p class="testi-slider-statement">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                          been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <div class="media testi-slider-media">
                          <div class="media-left">
                            <a href="#">
                              <img src="images/photos/asuna-diana.png" width="104" height="104" alt="Testimonial Asuna Diana di Jagadtour" class="media-object testi-slider-photo">
                            </a>
                          </div>
                          <div class="media-body media-middle">
                            <h4 class="media-heading testi-slider-name">Asuna Diana</h4>
                            <p class="testi-slider-city">Depok</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="panel panel-default testi-slider-item">
                      <div class="panel-body">
                        <p class="testi-slider-statement">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
                          been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <div class="media testi-slider-media">
                          <div class="media-left">
                            <a href="#">
                              <img src="images/photos/putri-sahadaya.png" width="104" height="104" alt="Testimonial Thomas Budi di Jagadtour" class="media-object testi-slider-photo">
                            </a>
                          </div>
                          <div class="media-body media-middle">
                            <h4 class="media-heading testi-slider-name">Thomas Budi</h4>
                            <p class="testi-slider-city">Surabaya</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-md-4">
                <h2 class="content-title">Paket Lainnya</h2>
                <div class="packdetail-packother">
                  <a href="#">
                    <div class="panel panel-default card-single">
                      <div class="panel-body card-single-body">
                        <img src="images/thumbnails/jagadtour-bromo-sunrise.jpg" width="1035" height="642" alt="" class="img-responsive">
                        <div class="card-single-caption">
                          <p class="tag tag-orange card-single-tag">Family Trip</p>
                          <p class="card-single-title">Bromo Sunrise Tour</p>
                          <p class="card-single-text">3 Days 3 Nights</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="packdetail-packother">
                  <a href="#">
                    <div class="panel panel-default card-single">
                      <div class="panel-body card-single-body">
                        <img src="images/thumbnails/jagadtour-bromo-sunrise.jpg" width="1035" height="642" alt="" class="img-responsive">
                        <div class="card-single-caption">
                          <p class="tag tag-blue card-single-tag">Corporate Trip</p>
                          <p class="card-single-title">Tour Malang, Bromo, Batu</p>
                          <p class="card-single-text">4 Days 3 Nights</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="packdetail-packother">
                  <a href="#">
                    <div class="panel panel-default card-single">
                      <div class="panel-body card-single-body">
                        <img src="images/thumbnails/jagadtour-bromo-sunrise.jpg" width="1035" height="642" alt="" class="img-responsive">
                        <div class="card-single-caption">
                          <p class="tag tag-blue card-single-tag">Corporate Trip</p>
                          <p class="card-single-title">Tour Museum Malang</p>
                          <p class="card-single-text">3 Days 2 Nights</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            </div>
          </div>
        </section>
    
@endsection
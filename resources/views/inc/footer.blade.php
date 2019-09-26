<?php
  $client = new GuzzleHttp\Client();
  $response = $client->request('GET', '45.32.105.117:7094/api/footer/get4blog');
  $statusCode = $response->getStatusCode();
  $body = json_decode($response->getBody()->getContents());
  $data = $body->data;
?>

<!-- Footer -->
<footer class="footer js-footer">
    <div class="footer-photo">
      <div class="owl-carousel owl-theme photo-slider js-photo-slider">
        <!-- See Js Code "Photo Gallery Footer" -->
      </div>
      <a class="btn btn-instagram" href="https://www.instagram.com/jagadtour/"></a>
    </div>
    <div class="footer-menu">
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-3 footer-menu-newsletter">
            <h4>Newsletter</h4>
            <p class="newsletter-desc">
              Dapatkan tips dan info diskon paket wisata terbaru dari Jagad Tour melalui email anda. Gratis!
            </p>
            <!-- Begin Mailchimp Signup Form -->
            <form action="https://gmail.us3.list-manage.com/subscribe/post?u=095f958e797e8d60296fc8499&amp;id=5205866a69" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletter-form validate" target="_blank" novalidate>
              <div class="form-group">
                <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Masukkan email anda" id="mce-EMAIL">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div class="clear">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-rounded btn-orange">
              </div>
            </form>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-4 footer-menu-article full-width">
            <h4>Artikel Terbaru</h4>
            @foreach ($data as $data)
            <div class="media article-media">
                <div class="media-left article-media-photo">
                  <a href={{url('/blog-detail'.'/'.$data->id)}}>
                    <img class="media-object" src={{$data->url.$data->directory.$data->gambar_blog}} style="height: 100%; width:100%;" alt="Jagadtour Artikel">
                  </a>
                </div>
                <div class="media-body">
                <p><a href={{url('/blog-detail'.'/'.$data->id)}}>{{$data->judul}}</a></p>
                </div>
              </div> 
            @endforeach
          </div>
          <div class="col-xs-6 col-sm-6 col-md-2 footer-menu-info full-width">
            <h4>Informasi</h4>
            <ul class="info-list">
              <li class="info-list-item"><a href={{ url('/about') }}>Tentang Kami</a></li>
              <li class="info-list-item"><a href={{ url('/syarat-ketentuan') }}>Syarat dan Ketentuan</a></li>
              <li class="info-list-item"><a href={{ url('/kebijakan-privasi') }}>Kebijakan Privasi</a></li>
              <li class="info-list-item"><a href="#">Cara Pembayaran</a></li>
              <li class="info-list-item"><a href="#">Bantuan</a></li>
              <li class="info-list-item"><a href={{ url('/FAQ') }}>FAQ</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 footer-menu-contact">
            <h4>Alamat</h4>
            <p class="contact-content">
              Malang (Office 1) <br> Banyuwangi (Office 2) <br> Ranupane (Basecamp) <br>
            </p>
            <p class="contact-content">Email: cs@jagadtour.com</p>
            <p class="contact-content contact-address">0341 – 5051185 / 08113785758</p>
            <p class="contact-content">Find Us</p>
            <p class="contact-content socmed-list">
              <a class="contact-content-sm" href="https://www.instagram.com/jagadtour/"><i class="fa fa-instagram"></i></a>
              <a class="contact-content-sm" href="https://www.facebook.com/officialjagadtour/"><i class="fa fa-facebook-square"></i></a>
              <a class="contact-content-sm" href="https://www.youtube.com/watch?v=rrf9fu9lSos"><i class="fa fa-twitter-square"></i></a>
              <a class="contact-content-sm" href="https://twitter.com/jagadtourtravel"><i class="fa fa-youtube-play"></i></a>
            </p>
            <p class="contact-content">We Accept Payment From</p>
            <p class="contact-content payment-list">
              <a href="#"><i class="bank-icon icon-bri"></i></a>
              <a href="#"><i class="bank-icon icon-bni"></i></a>
              <a href="#"><i class="bank-icon icon-mandiri"></i></a>
              <a href="#"><i class="bank-icon icon-bca"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 copyright-left">
            <p>Copyright © 2019 Jagad Tour | All right reserved.</p>
          </div>
          <div class="col-sm-6 copyright-right">
            <p>Website designed &amp; developed by Illiyin Studio</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
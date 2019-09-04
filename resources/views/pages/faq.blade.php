@extends('layouts.layoutNoHeader')

@section('content')
<!-- FAQ -->
<section class="content content-packdetail content-faq">
        <div class="container">
            <div class="row">
            <div class="col-md-8 packdetail-left">
                <h2 class="content-title">FAQ</h2>
                
                <div class="panel-group card-group" id="js-package" role="tablist" aria-multiselectable="true">
                
                <!-- FAQ -->
                <div class="panel panel-default panel-complete content-packdetail-panel packdetail-destination">
                    <div class="panel-heading panel-complete-heading panel-heading-blue" role="tab" id="heading-destination">
                    <h4 class="panel-title panel-complete-title">
                        <a role="button" data-toggle="collapse" data-parent="#js-package" href="#js-package-destination" aria-expanded="true" aria-controls="js-package-destination">Apa promo di hari ini?</a>
                    </h4>
                    </div>
                    <div id="js-package-price" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-facility">
                        <div class="panel-body panel-complete-content">
                            <p>
                                Untuk promo paket di jagad tour bisa dicek di sini
                            </p>
                        </div>
                    </div>
                </div>
    
                <!-- FAQ -->
                <div class="panel panel-default panel-complete content-packdetail-panel packdetail-itinerary">
                    <div class="panel-heading panel-complete-heading panel-heading-blue" role="tab" id="heading-itinerary">
                    <h4 class="panel-title panel-complete-title">
                        <a role="button" data-toggle="collapse" data-parent="#js-package" href="#js-package-itinerary" aria-expanded="true" aria-controls="js-package-itinerary">Jikalau destinasi pengen diubah bisa nggak ya?</a>
                    </h4>
                    </div>
                    <div id="js-package-content" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-facility">
                        <div class="panel-body panel-complete-content">
                            <p>
                                Bisa, sesuaikan dengan keinginan anda jika ingin mengganti destinasinya.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ -->
                <div class="panel panel-default panel-complete content-packdetail-panel packdetail-facility">
                    <div class="panel-heading panel-complete-heading panel-heading-blue" role="tab" id="heading-facility">
                    <h4 class="panel-title panel-complete-title">
                        <a role="button" data-toggle="collapse" data-parent="#js-package" href="#js-package-facility" aria-expanded="true" aria-controls="js-package-facility">Apakah bisa dijemput selain di bandara?</a>
                    </h4>
                    </div>
                    <div id="js-package-price" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-facility">
                        <div class="panel-body panel-complete-content">
                            <p>
                                Bisa, penjemputan bebas di mana saja.
                            </p>
                        </div>
                    </div>
                </div>
    
                    <!-- FAQ -->
                    <div class="panel panel-default panel-complete content-packdetail-panel packdetail-facility">
                        <div class="panel-heading panel-complete-heading panel-heading-blue" role="tab" id="heading-facility">
                            <h4 class="panel-title panel-complete-title">
                                <a role="button" data-toggle="collapse" data-parent="#js-package" href="#js-package-facility" aria-expanded="true" aria-controls="js-package-facility">Untuk paket diatas 100 orang apa juga melayani?</a>
                            </h4>
                        </div>
                        <div id="js-package-price" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-facility">
                            <div class="panel-body panel-complete-content">
                                <p>
                                    Iya bisa, apapun keinginan anda sampaikan kepada kami.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAkET LAINNYA -->
            <div class="col-md-4 right">
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
            </div>
            </div>
        </div>
        </section>
@endsection
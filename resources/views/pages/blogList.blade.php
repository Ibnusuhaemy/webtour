@extends('layouts.layoutNoHeader')

@section('content')
        <!-- Listed Article -->
        <section class="content content-listed-article content-blog-list" id="listed">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <h1 class="header-title">Artikel Jagad Tour</h1>
                </div>
              </div>
              <div class="row listed-navigation">
                <div class="col-sm-6 listed-filter">
      
                  <div class="dropdown listed-dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="time" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="true">
                      Latest
                      <i class="jgicon icon-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="time">
                      <li><a href="#">Today</a></li>
                      <li><a href="#">This Week</a></li>
                      <li><a href="#">This Month</a></li>
                    </ul>
                  </div>
      
                  <div class="dropdown listed-dropdown hidden-mobile">
                    <button class="btn btn-default dropdown-toggle" type="button" id="category" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="true">
                      Categories
                      <i class="jgicon icon-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="category">
                      <li><a href="#">Wisata</a></li>
                      <li><a href="#">Oleh-Oleh</a></li>
                      <li><a href="#">Kuliner</a></li>
                    </ul>
                  </div>
      
                </div>
      
                <div class="col-sm-6 listed-search">
                  <form class="form-inline js-form-inline">
                    <div class="form-group listed-search-field">
                      <div class="input-group">
                        <input type="text" class="form-control search js-search-field" id="exampleInputAmount"
                          placeholder="Ketik dan enter untuk mencari...">
                      </div>
                    </div>
                    <span class="btn js-btn-search"><i class="jgicon icon-search"></i></span>
                  </form>
                </div>
      
              </div>
              <div class="row listed-card list list-group-list">
                <div class="list-group-item">
                  <div class="panel panel-default card-complete">
                    <div class="panel-heading card-complete-heading">
                      <div class="card-complete-image">
                        <img src="images/thumbnails/jagadtour-artikel-lukisan-3d.jpg" width="345" height="214"
                          alt="Jagadtour Blog Image" class="img-responsive">
                      </div>
                      <p class="tag tag-orange card-complete-tag">Wisata</p>
                    </div>
                    <div class="panel-body card-complete-body">
                      <h3 class="card-complete-title"><a href="blog-detail.php" class="title">4 Tempat Wisata dengan Lukisan 3D
                          di Malang Raya</a></h3>
                      <div class="row">
                        <div class="col-xs-8">
                          <div class="media">
                            <div class="media-left">
                              <a href="#">
                                <img class="media-object" src="images/photos/putri-sahadaya.png" width="60" height="60"
                                  alt="Jagadtour Blog Contributor">
                              </a>
                            </div>
                            <div class="media-body">
                              <p>Brian Murray</p>
                              <p>24 May 2018</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-4 media-comment">
                          <p><span class="jgicon icon-comment"></span> 150</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="panel panel-default card-complete">
                    <div class="panel-heading card-complete-heading">
                      <div class="card-complete-image">
                        <img src="images/thumbnails/jagadtour-artikel-kampung-biru.jpg" width="345" height="214"
                          alt="Jagadtour Blog Image" class="img-responsive">
                      </div>
                      <p class="tag tag-orange card-complete-tag">Wisata</p>
                    </div>
                    <div class="panel-body card-complete-body">
                      <div class="card-complete-caption">
                        <h3 class="card-complete-title"><a href="blog-detail.php" class="title">Kampung Biru, Replika Santorini
                            yang Ada di Kota Malang</a></h3>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="media">
                              <div class="media-left">
                                <a href="#">
                                  <img class="media-object" src="images/photos/putri-sahadaya.png" width="60" height="60"
                                    alt="Jagadtour Blog Contributor">
                                </a>
                              </div>
                              <div class="media-body">
                                <p>Paul Coleman</p>
                                <p>24 May 2018</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-4 media-comment">
                            <p><span class="jgicon icon-comment"></span> 150</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="panel panel-default card-complete">
                    <div class="panel-heading card-complete-heading">
                      <div class="card-complete-image">
                        <img src="images/thumbnails/jagadtour-artikel-bakpao-telo.jpg" width="345" height="214"
                          alt="Jagadtour Blog Image" class="img-responsive">
                      </div>
                      <p class="tag tag-orange card-complete-tag">Wisata</p>
                    </div>
                    <div class="panel-body card-complete-body">
                      <div class="card-complete-caption">
                        <h3 class="card-complete-title"><a href="blog-detail.php" class="title">Bakpao Telo, Oleh-oleh Paling
                            Juara dari Malang</a></h3>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="media">
                              <div class="media-left">
                                <a href="#">
                                  <img class="media-object" src="images/photos/putri-sahadaya.png" width="60" height="60"
                                    alt="Jagadtour Blog Contributor">
                                </a>
                              </div>
                              <div class="media-body">
                                <p>Nicholas Sanchez</p>
                                <p>24 May 2018</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-4 media-comment">
                            <p><span class="jgicon icon-comment"></span> 150</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="panel panel-default card-complete">
                    <div class="panel-heading card-complete-heading">
                      <div class="card-complete-image">
                        <img src="images/thumbnails/jagadtour-artikel-kuliner-jumbo.jpg" width="345" height="214"
                          alt="Jagadtour Blog Image" class="img-responsive">
                      </div>
                      <p class="tag tag-orange card-complete-tag">Kuliner</p>
                    </div>
                    <div class="panel-body card-complete-body">
                      <div class="card-complete-caption">
                        <h3 class="card-complete-title"><a href="blog-detail.php" class="title">Kuliner Malang dengan Porsi
                            Jumbo, Bisa Makan Keroyokan</a></h3>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="media">
                              <div class="media-left">
                                <a href="#">
                                  <img class="media-object" src="images/photos/putri-sahadaya.png" width="60" height="60"
                                    alt="Jagadtour Blog Contributor">
                                </a>
                              </div>
                              <div class="media-body">
                                <p>Brian Murray</p>
                                <p>24 May 2018</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-4 media-comment">
                            <p><span class="jgicon icon-comment"></span> 150</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="panel panel-default card-complete">
                    <div class="panel-heading card-complete-heading">
                      <div class="card-complete-image">
                        <img src="images/thumbnails/jagadtour-artikel-air-terjun-perawan.jpg" width="345" height="214"
                          alt="Jagadtour Blog Image" class="img-responsive">
                      </div>
                      <p class="tag tag-orange card-complete-tag">Wisata</p>
                    </div>
                    <div class="panel-body card-complete-body">
                      <div class="card-complete-caption">
                        <h3 class="card-complete-title"><a href="blog-detail.php" class="js-listed-card-title">Menjelajah Air
                            Terjun 'Perawan' di Malang Raya</a></h3>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="media">
                              <div class="media-left">
                                <a href="#">
                                  <img class="media-object" src="images/photos/putri-sahadaya.png" width="60" height="60"
                                    alt="Jagadtour Blog Contributor">
                                </a>
                              </div>
                              <div class="media-body">
                                <p>Paul Coleman</p>
                                <p>24 May 2018</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-4 media-comment">
                            <p><span class="jgicon icon-comment"></span> 150</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="panel panel-default card-complete">
                    <div class="panel-heading card-complete-heading">
                      <div class="card-complete-image">
                        <img src="images/thumbnails/jagadtour-artikel-soto-sabin.jpg" width="345" height="214"
                          alt="Jagadtour Blog Image" class="img-responsive">
                      </div>
                      <p class="tag tag-orange card-complete-tag">Kuliner</p>
                    </div>
                    <div class="panel-body card-complete-body">
                      <div class="card-complete-caption">
                        <h3 class="card-complete-title"><a href="blog-detail.php" class="js-listed-card-title">Soto Sabin
                            Ketangi, Kuliner Malang yang Bikin Nagih</a></h3>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="media">
                              <div class="media-left">
                                <a href="#">
                                  <img class="media-object" src="images/photos/putri-sahadaya.png" width="60" height="60"
                                    alt="Jagadtour Blog Contributor">
                                </a>
                              </div>
                              <div class="media-body">
                                <p>Nicholas Sanchez</p>
                                <p>24 May 2018</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-4 media-comment">
                            <p><span class="jgicon icon-comment"></span> 150</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script type="text/javascript">
  var options = {
    valueNames: ['title']
  };
  var userList = new List('listed', options);

</script>

<script type="text/javascript">
  $('.js-btn-search').click(function() {
    $('.js-search-field').toggleClass('show');
    $('.js-form-inline').toggleClass('form-show');
  });

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
@extends('layouts.layout')

@section('content')
<!-- Featured Article -->
<section class="content content-blog-featured">
    <div class="container">
        <div class="row">
        <div class="col-xs-12">
            <h2 class="content-title">Artikel Jagad Tour</h2>
            <div class="blog-featured-container js-blog-featured-container">
            <ul class="list-inline featured-list">
                <li class="featured-1 featured-item">
                <a href="{{url('/blog-detail')}}">
                    <div class="panel panel-default card-single">
                    <div class="panel-body card-single-body">
                        <img src={{$data->featured[0]->url.$data->featured[0]->directory.$data->featured[0]->gambar_blog}} width="261" height="562" alt="Jagadtour Blog Image" class="img-responsive">
                        <div class="card-single-caption">
                        <p class="tag tag-orange card-single-tag">{{$data->featured[0]->type_blog}}</p>
                        <p class="card-single-title">{{$data->featured[0]->judul}}</p>
                        <p class="card-single-text">{{$data->featured[0]->created_at}}</p>
                        </div>
                    </div>
                    </div>
                </a>
                </li>
                <li class="featured-2 featured-item">
                <a href="blog-detail.php">
                    <div class="panel panel-default card-single">
                    <div class="panel-body card-single-body">
                        <img src={{$data->featured[1]->url.$data->featured[1]->directory.$data->featured[1]->gambar_blog}} width="524" height="269" alt="Jagadtour Blog Image" class="img-responsive">
                        <div class="card-single-caption">
                        <p class="tag tag-orange card-single-tag">{{$data->featured[1]->type_blog}}</p>
                        <p class="card-single-title">{{$data->featured[1]->judul}}</p>
                        <p class="card-single-text">{{$data->featured[1]->created_at}}</p>
                        </div>
                    </div>
                    </div>
                </a>
                </li>
                <li class="featured-3 featured-item">
                <a href="blog-detail.php">
                    <div class="panel panel-default card-single">
										<div class="panel-body card-single-body">
												<img src={{$data->featured[2]->url.$data->featured[2]->directory.$data->featured[2]->gambar_blog}} width="524" height="269" alt="Jagadtour Blog Image" class="img-responsive">
												<div class="card-single-caption">
												<p class="tag tag-orange card-single-tag">{{$data->featured[2]->type_blog}}</p>
												<p class="card-single-title">{{$data->featured[2]->judul}}</p>
												<p class="card-single-text">{{$data->featured[2]->created_at}}</p>
												</div>
										</div>
									</div4
                </a>
                </li>
                <li class="featured-4 featured-item">
                <a href="blog-detail.php">
                    <div class="panel panel-default card-single">
										<div class="panel-body card-single-body">
												<img src={{$data->featured[3]->url.$data->featured[3]->directory.$data->featured[3]->gambar_blog}} width="524" height="269" alt="Jagadtour Blog Image" class="img-responsive">
												<div class="card-single-caption">
												<p class="tag tag-orange card-single-tag">{{$data->featured[3]->type_blog}}</p>
												<p class="card-single-title">{{$data->featured[3]->judul}}</p>
												<p class="card-single-text">{{$data->featured[3]->created_at}}</p>
												</div>
										</div>
                    </div>
                </a>
                </li>
                <li class="featured-5 featured-item">
                <a href="blog-detail.php">
                    <div class="panel panel-default card-single">
										<div class="panel-body card-single-body">
												<img src={{$data->featured[4]->url.$data->featured[4]->directory.$data->featured[1]->gambar_blog}} width="524" height="269" alt="Jagadtour Blog Image" class="img-responsive">
												<div class="card-single-caption">
												<p class="tag tag-orange card-single-tag">{{$data->featured[4]->type_blog}}</p>
												<p class="card-single-title">{{$data->featured[4]->judul}}</p>
												<p class="card-single-text">{{$data->featured[4]->created_at}}</p>
												</div>
										</div>
                    </div>
                </a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    </section>

<!-- Listed Article -->
<section class="content content-listed-article" id="listed">
<div class="container">
    <div class="row listed-navigation">
    
    <div class="col-sm-6 listed-filter">
        
        <div class="dropdown listed-dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="time" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
        <button class="btn btn-default dropdown-toggle" type="button" id="category" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
            <input type="text" class="form-control search js-search-field" id="exampleInputAmount" placeholder="Ketik dan enter untuk mencari...">
            </div>
        </div>
        <span class="btn js-btn-search"><i class="jgicon icon-search"></i></span>
        </form>
    </div>
    
    </div>
    <div class="row listed-card list list-group-list">
        <?php $count = 0; ?>
        @foreach ($data->allblog as $data)
        <?php    
        if ($data->id_type == 1){
          $tag = 'Wisata';
          }
          else if ($data->id_type == 2) {
            $tag = 'Oleh-oleh';
          }
          else {
            $tag = 'Kuliner';
          }
        ?>
        <?php if($count == 6) break; ?>
        <div class="list-group-item">
                <div class="panel panel-default card-complete">
                <div class="panel-heading card-complete-heading">
                    <div class="card-complete-image">
                    <img src={{$data->url.$data->directory.$data->gambar_blog}} width="345" height="214" alt="Jagadtour Blog Image" class="img-responsive">
                    </div>
                    <p class="tag tag-orange card-complete-tag">{{$tag}}</p>
                </div>
                <div class="panel-body card-complete-body">
                    <h3 class="card-complete-title"><a href={{url('/blog-detail'.'/'.$data->id)}} class="title">{{$data->Judul}}</a></h3>
                    <div class="row">
                    <div class="col-xs-8">
                        <div class="media">
                        <div class="media-body">
                            @php
                                if ($data->komentar_count === 0){
                                    echo"<p></p>";
                                    echo"<p></p>";
                                }
                                else {
                                    echo"<p>".$data->komentar[0]->nama_komentar."</p>";
                                    echo"<p>".$data->komentar[0]->created_at."</p>";
                                }
                            @endphp
                        </div>
                        </div>
                    </div>
                    <div class="col-xs-4 media-comment">
                        <p><span class="jgicon icon-comment"></span>{{$data->komentar_count}}</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <?php $count++; ?> 
        @endforeach 
    </div>
    </div>
    <div class="row listed-button">
    <div class="col-xs-12">
        <!-- <button type="button" class="btn btn-transparent"> Lihat Artikel Lainnya</button> -->
        <a class="btn btn-transparent" href={{url ('/blog-list')}}>Lihat Artikel Lainnya</a>

    </div>
    </div>
</div>
</section>
@endsection

@section('js')
      <!-- Javascript -->
  <script type="text/javascript" src="vendor/owl-carousel.2.3.4/owl.carousel.min.js"></script>

  <script type="application/javascript" src="vendor/angle-vladov-mobile-slider/jquery.mobile-slider.min.js"></script>
  <script type="application/javascript">
    $(document).ready(function($) {
      $('.js-blog-featured-container').mobileSlider({
        sliderWhen: 991,
        itemWidth: "100%",
        startAt: 2
      });
    });

  </script>

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
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
                @foreach ($data as $data)
                @php
                    if ($data->id_type == 1){
                      $tag = 'Wisata';
                      }
                      else if ($data->id_type == 2) {
                        $tag = 'Oleh-oleh';
                      }
                      else {
                        $tag = 'Kuliner';
                      }  
                @endphp
                <div class="list-group-item">
                    <div class="panel panel-default card-complete">
                      <div class="panel-heading card-complete-heading">
                        <div class="card-complete-image">
                          <img src="images/thumbnails/jagadtour-artikel-lukisan-3d.jpg" width="345" height="214"
                            alt="Jagadtour Blog Image" class="img-responsive">
                        </div>
                      <p class="tag tag-orange card-complete-tag">{{$tag}}</p>
                      </div>
                      <div class="panel-body card-complete-body">
                        <h3 class="card-complete-title">
                          <a href={{url('/blog-detail'.'/'.$data->id)}} class="title">
                            {{$data->Judul}}
                          </a>
                        </h3>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="media">
                              <div class="media-left">
                              </div>
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
                @endforeach
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
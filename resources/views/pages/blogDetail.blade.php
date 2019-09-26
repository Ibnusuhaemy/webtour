@extends('layouts.layoutNoHeader')

@section('content')
  <!-- About Description -->
  <section class="content content-blog-detail">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            @php
                if($data->blog[0]->id_type == 1){
                  $tag = 'Wisata';
                }
                elseif ($data->blog[0]->id_type == 2) {
                  $tag = 'Oleh-oleh';
                }
                else {
                  $tag = 'Kuliner';
                }
            @endphp
            <div class="content-header blog-detail-header">
            <h1 class="header-title">{{$data->blog[0]->Judul}}</h1>
              <p class="header-caption"><i class="jgicon icon-coffee"></i> {{$tag}} <span class="caption-black"><i class="jgicon icon-clock"></i> {{$data->blog[0]->created_at}}</span></p>
              <div class="blog-detail-header-img">
                <img src={{$data->blog[0]->url.$data->blog[0]->directory.$data->blog[0]->gambar_blog}} width="1120" height="473" alt="Detail Artikel Jagadtour" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="blog-detail-article">
              <p>
                {{$data->blog[0]->deskripsi}}
              </p>
            </div>
            <div class="blog-detail-related-link">
              <h5 class="blog-detail-small-title">Baca Juga</h5>
              <ul>
                  <?php $count = 0; ?>
                  @foreach ($data->bloglain as $item)
                      <?php if($count == 3) break; ?>
                        <li class="related-link-item">
                          <p><a href={{url('/blog-detail'.'/'.$item->id)}}>{{$item->Judul}}</a></p>
                        </li>
                      <?php $count++; ?>
                  @endforeach                  
              </ul>
            </div>
            <div class="blog-detail-share">
              <h5 class="blog-detail-small-title">Bagikan Artikel Ini</h5>
              <ul class="list-inline share-media-icon">
                <li><a href="#"><i class="jgicon icon-facebook-fill"></i></a></li>
                <li><a href="#"><i class="jgicon icon-twitter-fill"></i></a></li>
                <li><a href="#"><i class="jgicon icon-linkedin-fill"></i></a></li>
                <li><a href="#"><i class="jgicon icon-tumblr-fill"></i></a></li>
                <li><a href="#"><i class="jgicon icon-google-plus-fill"></i></a></li>
              </ul>
            </div>
            <div class="blog-detail-related-thumbnail">
              <div class="row related-thumbnail-title">
                <div class="col-sm-6 related-title-left">
                  <h3 class="blog-detail-big-title">Artikel Terkait</h3>
                </div>
                <div class="col-sm-6 related-title-right">
                  <p class="related-thumbnail-more"><a href={{url ('/blog-list')}}>Lebih banyak lagi</a></p>
                </div>
              </div>
              <div class="row listed-card list list-group-list blog-detail-listed-card">
                  <?php $count = 0; ?>
                  @foreach ($data->bloglain as $item2)
                      <?php if($count == 2) break; ?>
                      <?php
                        if ($item2->id_type == 1){
                        $tag2 = 'Wisata';
                        }
                        else if ($item2->id_type == 2) {
                          $tag2 = 'Oleh-oleh';
                        }
                        else {
                          $tag2 = 'Kuliner';
                        } 
                      ?>
                      <div class="list-group-item">
                          <div class="panel panel-default card-complete">
                            <div class="panel-heading card-complete-heading">
                              <div class="card-complete-image">
                                <img src={{$item2->url.$item2->directory.$item2->gambar_blog}} width="345" height="214" alt="Jagadtour Blog Image" class="img-responsive">
                              </div>
                            <p class="tag tag-orange card-complete-tag">{{$tag2}}</p>
                            </div>
                            <div class="panel-body card-complete-body">
                            <h3 class="card-complete-title"><a href={{url('/blog-detail'.'/'.$item2->id)}} class="title">{{$item2->Judul}}</a></h3>
                              <div class="row">
                                <div class="col-xs-8">
                                  <div class="media">
                                      @php
                                      if ($item2->komentar_count === 0){
                                          echo"<p></p>";
                                          echo"<p></p>";
                                      }
                                      else {
                                          echo"<p>".$item2->komentar[0]->nama_komentar."</p>";
                                          echo"<p>".$item2->komentar[0]->created_at."</p>";
                                      }
                                     @endphp
                                  </div>
                                </div>
                                <div class="col-xs-4 media-comment">
                                <p><span class="jgicon icon-comment"></span>{{$item2->komentar_count}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php $count++; ?>
                  @endforeach
              </div>
              <div class="row blog-detail-comment">
                <div class="col-xs-12">
                <h3 class="blog-detail-big-title">{{$data->blog[0]->komentar_count}} Komentar</h3>
                <form class="form blog-detail-comment-form" method="POST" action="{{route('postKomentar', $data->blog[0]->id)}}">
                  {{csrf_field()}}
                    <div class="blog-detail-comment-content">
                      <div class="form-group comment-form-textarea">
                        <input name="nama_komentar" type="text" id="comment-name" class="form-control" placeholder="Tulis Nama Anda">
                      </div>
                      <div class="form-group comment-form-textarea">
                        <textarea name="komentar" id="comment" class="form-control" rows="5" placeholder="Tulis Komentar..."></textarea>
                      </div>
                      <div class="form-group comment-form-submit">
                        <input type="submit" value="kirim sekarang" class="btn btn-orange">
                      </div>
                    </div>
                  </form>
                  <div class="blog-detail-comment-list">
                    @foreach ($data->blog[0]->komentar as $komen)
                     <div class="media comment-list-item">
                        <div class="blog-detail-comment-content">
                        <h4 class="media-heading" id="user-name-1">{{$komen->nama_komentar}} <span class="comment-list-time"><i class="jgicon icon-clock"></i>{{$komen->created_at}}</span></h4>
                          <p class="comment-list-text">
                            {{$komen->komentar}}
                          </p>
                          <ul class="list-inline comment-list-share">
                            <li><a href="#comment" id="reply-1">Balas <i class="jgicon icon-reply"></i></a></li>
                            <li><a href="#">Bagikan <i class="jgicon icon-share"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 blog-detail-package">
            <div class="blog-detail-package-item blog-detail-package-adv">
              <a href="#">
                <div class="panel panel-default card-single">
                  <div class="panel-body card-single-body">
                    <img src="{{asset('images/thumbnails/jagadtour-bromo-sunrise.jpg')}}" width="1035" height="642" alt="" class="img-responsive">
                    <div class="card-single-caption">
                      <p class="tag tag-orange card-single-tag">Iklan</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <h2 class="content-title">Paket Lainnya</h2>
            @foreach ($data->paket as $paket)
            <div class="blog-detail-package-item">
                <a href="#">
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
                            if(empty($paket->jam)){
                              echo $paket->hari." D ".$paket->malam." N";
                            }
                            elseif (empty($paket->malam)) {
                              echo $paket->hari." D";
                            }
                          ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
@endsection

@section('js')
      <!-- comment -->
  <script>
      $(document).ready(function() {
        var name;
        $("html #reply-1").click(function() {
          $("html #comment").text(function() {
            name = $("#user-name-1").clone().children().remove().end().text();
            return "@" + name;
          });
        });
      });
      $(document).ready(function() {
        var name;
        $("html #reply-1").click(function() {
          $("html #comment").text(function() {
            name = $("#user-name-1").clone().children().remove().end().text();
            return "@" + name;
          });
        });
      });
  
    </script>
@endsection
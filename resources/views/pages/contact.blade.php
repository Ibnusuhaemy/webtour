@extends('layouts.layout')

@section('content')
     <!-- Contact form -->
     <section class="content content-contact">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="contact-left">
                    <h2 class="content-title">Kirimkan Saran atau Pertanyaan Anda!</h2>
                    <p class="content-caption">Atau datang dan minum kopi bersama di Office Kami</p>
                    <form class="contact-left-form" action="{{url('contact/submit')}}" method="POST">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama lengkap" name="nama">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email anda" name="email">
                      </div>
                      <div class="form-group">
                        <textarea rows="7" class="form-control" placeholder="Pesan yang mau disampaikan" name="pesan"></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn btn-rounded btn-orange" value="Submit Pesan" name="send">
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="contact-right">
                    <div class="embed-responsive embed-responsive-16by9 contact-right-map">
                      <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.94210127064!2d112.5718291180355!3d-7.922669305701599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788190108ac8d1%3A0x227cef2955c83b2d!2sJAGAD+TOUR+%7C+%231+Biro+Perjalanan+Wisata+di+Malang!5e0!3m2!1sid!2sid!4v1552902236924" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="contact-right-bg"></div>
                  </div>
                </div>
              </div>
              {{-- <!-- Modal -->
         <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
      </div> --}}
    </div>
 </section>
@endsection
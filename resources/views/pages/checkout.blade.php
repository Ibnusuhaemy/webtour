@extends('layouts.layoutNoHeader')

@section('content')
<section class="content content-packdetail font-dinnex">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="content-title">Checkout</h2>
			<hr>
			<div class="checkour-form">
				<form action="#">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="nama-depan">Nama Depan <span class="text-danger">*</span></label>
							    <input type="text" name="nama-depan" class="form-control" id="nama-depan" placeholder="Nama Depan" required>
						  	</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="nama-belakang">Nama Belakang <span class="text-danger">*</span></label>
							    <input type="text" name="nama-belakang" class="form-control" id="nama-belakang" placeholder="Nama Belakang" required>
						  	</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="email">Email <span class="text-danger">*</span></label>
							    <input type="email" name="email" class="form-control" id="email" placeholder="mail@domain.com" required>
						  	</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="Telepon">Telepon <span class="text-danger">*</span></label>
							    <input type="text" name="Telepon" class="form-control" id="Telepon" placeholder="Telepon" required>
						  	</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="alamat1">Alamat 1 <span class="text-danger">*</span></label>
							    <input type="text" name="alamat1" class="form-control" id="alamat1" placeholder="Alamat 1" required>
						  	</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="alamat2">Alamat 2 <span class="text-danger">*</span></label>
							    <input type="text" name="alamat2" class="form-control" id="alamat2" placeholder="Alamat 2" required>
						  	</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="Kota">Kota <span class="text-danger">*</span></label>
							    <input type="text" name="Kota" class="form-control" id="Kota" placeholder="Kota Anda" required>
						  	</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="Provinsi">Provinsi <span class="text-danger">*</span></label>
							    <input type="text" name="Provinsi" class="form-control" id="Provinsi" placeholder="Provinsi Anda" required>
						  	</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="kodepos">Kode Pos <span class="text-danger">*</span></label>
							    <input type="text" name="kodepos" class="form-control" id="kodepos" placeholder="Kode Pos" pattern="[0-9]+" title="please enter number only" required>
						  	</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
							    <label for="kebutuhanTambahan">Kebutuhan Tambahan <span class="text-danger">*</span></label><br>
							    <textarea name="kebutuhanTambahan" id="kebutuhanTambahan" class="form-control" rows="10" placeholder="Kebutuhan Tambahan" required></textarea>
						  	</div>
						</div>
						<div class="col-md-12">
							<div class="checkbox"> <label> <input type="checkbox"> Saya sudah membaca dan menerima <a href="#">syarat dan ketentuan</a> dan <a href="#">kebijakan privasi</a> </label> </div>
						</div>
						<div class="col-md-12">
							<input type="submit" id="btnsubmitticket" class="btn btn-lg btn-rounded btn-orange" value="Checkout">
						</div>
					</div>
				</form>
			</div>
			<br>
			<br>
        </div>
        <div class="col-md-4">
          <h2 class="content-title">Paket Anda</h2>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-6 col-md-7 mry-05">
							<p class="title"><strong>New York: Museum of Modern Art</strong></p>
							<p class="text-muted">Bromo, Lumajang</p>
						</div>
						<div class="col-xs-6 col-md-5">
							<img src="images/thumbnails/jagadtour-bromo-sunrise.jpg" class="img-rounded img-responsive" alt="">
						</div>
					</div>
					<hr>
					<div class="row mry-05">
						<div class="col-xs-4">
							<span>Tipe Tour</span>
						</div>
						<div class="col-xs-6">
							<span>Daily Tour</span>
						</div>
					</div>
					<div class="row mry-05">
						<div class="col-xs-4">
							<span>Tanggal</span>
						</div>
						<div class="col-xs-6">
							<span>8 Agustus 2019</span>
						</div>
					</div>
					<div class="row mry-05">
						<div class="col-xs-4">
							<span>Durasi</span>
						</div>
						<div class="col-xs-6">
							<span>Full day</span>
						</div>
					</div>
					<div style="background: #f7f7f7; padding: 20px; margin-top: 20px;">
						<div class="row mry-05">
							<div class="col-xs-5">
								<span>Total Dewasa</span>
							</div>
							<div class="col-xs-6">
								<span>2</span>
							</div>
						</div>
						<div class="row mry-05">
							<div class="col-xs-5">
								<span>Total Anak-Anak</span>
							</div>
							<div class="col-xs-6">
								<span>2</span>
							</div>
						</div>
					</div>
					<hr>
					<div class="row mry-05">
						<div class="col-xs-5">
							<span>Harga Dewasa</span>
						</div>
						<div class="col-xs-7 text-right">
							<span>Rp. 120.000</span>
						</div>
					</div>
					<div class="row mry-05">
						<div class="col-xs-5">
							<span>Harga anak-anak</span>
						</div>
						<div class="col-xs-7 text-right">
							<span>Rp 30.000</span>
						</div>
					</div>
					<div class="row mry-05">
						<div class="col-xs-5">
							<span>Harga Bayi</span>
						</div>
						<div class="col-xs-7 text-right">
							<span>Rp 20000</span>
						</div>
					</div>
					<div class="row mry-05">
						<div class="col-xs-5">
							<span>Sub Total</span>
						</div>
						<div class="col-xs-7 text-right">
							<span>Rp. 400.000</span>
						</div>
					</div>
					<div class="row mry-05">
						<div class="col-xs-5">
							<span>Pajak</span>
						</div>
						<div class="col-xs-7 text-right">
							<span>10%</span>
						</div>
					</div>
					<div class="row mry-05">
						<div class="col-xs-5">
							<h4>Total </h4>
						</div>
						<div class="col-xs-7 text-right">
							<h4>Rp.440.000</h4>
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

@endsection
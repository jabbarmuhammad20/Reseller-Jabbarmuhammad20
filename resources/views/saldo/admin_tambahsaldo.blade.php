@extends('layouts.master')
@section('content')
<div class="">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Konfirmasi Produk<small>Hi Pastikan produk anda mendarat dengan selamat & tidak ada lecet untuk mendapatkan pelanggan yang lebih banyak</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form role="form" action="/tambah_saldostore" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						{{csrf_field() }}
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID Akun <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" id="first-name" name="user_id" value="{{$users->id}}" class="form-control " readonly="">
							</div>
						</div>

						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tambah Saldo<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" id="first-name" name="saldo_masuk" class="form-control ">
							</div>
						</div>


						<div class="ln_solid"></div>
						<div class="item form-group">
							<div class="col-md-6 col-sm-6 offset-md-3">
								<button class="btn btn-primary" type="button">Kembali</button>
								<button type="submit" class="btn btn-success">Konfirmasi</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>



	@endsection
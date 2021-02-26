@extends('layouts.master')
@section('content')
<div class="">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Konfirmasi Produk<small>Hi {{$riwayat_tranksaksi_tabel->User->name}} Pastikan produk anda mendarat dengan selamat & tidak ada lecet untuk mendapatkan pelanggan yang lebih banyak</small></h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form role="form" action="/saldokeluarmasuk" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
					{{csrf_field() }}
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID Akun <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" id="first-name" name="user_id" value="{{$riwayat_tranksaksi_tabel->user_id}}" class="form-control " readonly="">
							</div>
						</div>
						
						<div class="item form-group{{ $errors->has('pesanan_id') ? ' has-error' : '' }}">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">ID Pesanan<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" id="first-name" name="pesanan_id" value="{{$riwayat_tranksaksi_tabel->id}}" class="form-control " readonly="">
							</div>
							<span class="alert-danger">{{ $errors->first('pesanan_id') }}</span>
						</div>

						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Produk<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 ">
								<input type="text" id="last-name" name="produk" value="ID Pesanan : {{$riwayat_tranksaksi_tabel->id}}, Kode Produk : {{$riwayat_tranksaksi_tabel->k_produk}}, Nama Produk :  {{$riwayat_tranksaksi_tabel->n_produk}}, Ukuran {{$riwayat_tranksaksi_tabel->uk_produk}}" class="form-control" readonly="">
							</div>
						</div>
						<div class="item form-group">
							<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
							<div class="col-md-6 col-sm-6 ">
								<input id="middle-name" class="form-control" name="harga" type="text" name="middle-name" value="{{$riwayat_tranksaksi_tabel->hrg_m}}" readonly="">
							</div>
						</div>
						<div class="item form-group">
							<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Pesanan</label>
							<div class="col-md-6 col-sm-6 ">
								<input id="middle-name" class="form-control" name="qty" type="text"  value="{{$riwayat_tranksaksi_tabel->stok_m+$riwayat_tranksaksi_tabel->stok_m}}" readonly="">
							</div>
						</div>
						<div class="item form-group">
							<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Total</label>
							<div class="col-md-6 col-sm-6 ">
								<input id="middle-name" class="form-control" type="text" name="saldo_keluar" value="{{$riwayat_tranksaksi_tabel->jumlah_total}}" readonly="" >
							</div>
						</div>
						<div class="item form-group">
							<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Konfirmasi</label>
							<div class="col-md-6 col-sm-6 ">
								<input id="middle-name" class="form-control" type="text" name="konfirmasi" value="ya" readonly="" >
							</div>
						</div>
						<div class="item form-group">
							<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Ket.</label>
							<div class="col-md-6 col-sm-6 ">
								<input id="middle-name" class="form-control" type="text" name="ket" value="ya">
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
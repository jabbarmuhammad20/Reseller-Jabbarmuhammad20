@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
<div class="" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Tambah Data Baru</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li>
								<a href="produk/export" class="text-primary"><i class="fa fa-download"></i> Download</a>
							</li>
							<li>
								<a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" class="text-primary"><i class=" fa fa-plus "></i> Import</a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!-- Smart Wizard -->
						<p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
						<div id="wizard" class="form_wizard wizard_horizontal">
							<ul class="wizard_steps">
								<li>
									<a href="#step-1">
										<span class="step_no">1</span>
										<span class="step_descr">
											Step 1<br />
											<small>Step 1 description</small>
										</span>
									</a>
								</li>
								<li>
									<a href="#step-2">
										<span class="step_no">2</span>
										<span class="step_descr">
											Step 2<br />
											<small>Step 2 description</small>
										</span>
									</a>
								</li>
								<li>
									<a href="#step-3">
										<span class="step_no">3</span>
										<span class="step_descr">
											Step 3<br />
											<small>Step 3 description</small>
										</span>
									</a>
								</li>
							</ul>
							<div>
								<form role="form" action="/tambahproduk" id="demo-form2" method="post" enctype="multipart/form-data">
									{{csrf_field() }}

									<div id="step-1">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="k_produk">User Id <span class="required text-danger">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="user_id" name="user_id" required="required" class="form-control" value="{{ Auth::user()->id }}" readonly="">
											</div>
										</div>

										<div class="item form-group{{ $errors->has('k_produk') ? ' has-error' : '' }}">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="k_produk">Produk Id <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<input type="text" id="k_produk" name="k_produk" required="required" class="form-control">
											</div>
											<span class="help-danger">{{ $errors->first('k_produk') }}</span>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="kategori">Kategori*</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" id="kategori_id" name="kategori_id">
													<option>-</option>
													@foreach ($kategori as $kategori)
													<option value="{{$kategori->id}}">{{$kategori->n_kategori}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="n_produk">Nama Produk <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="n_produk" name="n_produk" required="required" class="form-control" value="{{ old('n_produk') }}">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="warna">Warna <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="warna" name="warna" required="required" class="form-control" value="{{ old('n_produk') }}">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="deskripsi">Deskripsi Produk <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
												<textarea id="deskripsi" class="form-control" name="deskripsi" rows="10" cols="30" value="{{ old('n_produk') }}"></textarea>
											</div>
										</div>
									</div>

									<div id="step-2">
										<h2 class="StepTitle">Step 2 Ukuran</h2>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="stok_m">Stok Ukuran M <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="stok_m" name="stok_m" required="required" class="form-control">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="stok_l">Stok Ukuran L <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="stok_l" name="stok_l" required="required" class="form-control">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="hrg_produk">Stok Ukuran XL <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="stok_xl" name="stok_xl" required="required" class="form-control">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="hrg_produk">Stok Ukuran XXL <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="stok_xxl" name="stok_xxl" required="required" class="form-control">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="hrg_produk">Harga Ukuran M <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="hrg_m" name="hrg_m" required="required" class="form-control">
											</div>
										</div>



										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="hrg_produk">Harga ukuran L <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="stok_l" name="hrg_l" required="required" class="form-control">
											</div>
										</div>



										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="hrg_produk">Harga ukuran XL <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="hrg_xl" name="hrg_xl" required="required" class="form-control">
											</div>
										</div>



										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="hrg_produk">Harga ukuran XXL <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="hrg_xxl" name="hrg_xxl" required="required" class="form-control">
											</div>
										</div>
									</div>

									<div id="step-3">
										<h2 class="StepTitle">Step 3 Content</h2>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="kategori">Status</label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" id="stts" name="stts">
													<option value="publish">Publish</option>
													<option value="diarsipkan">Arsipkan</option>
												</select>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="upload_produk">Gambar<span class="required">*</span>
											</label>

											<div class="col-md-6 col-sm-6">
												<input type="file" id="upload_produk" name="upload_produk" required="required" class="form-control">
											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<a href="/daftar_produk" type="button" class="btn btn-secondary">Cancel</a>
												<button class="btn btn-danger" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection



<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Import File Excel</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
			</div>
			<form action="{{url('/importExcelProduk')}}" role="form" enctype="multipart/form-data" method="post">
				{{csrf_field()}}
				<div class="item form-group">
					<label class="col-form-label col-md-3 col-sm-3 label-align" for="file">Import File Excel<span class="required text-danger">*</span>
					</label>
					<div class="col-md-6 col-sm-6">
						<input type="file" id="file" name="file" required="required" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Import</button>
				</div>
			</form>
		</div>
		<!-- /page content -->
	</div>
</div>
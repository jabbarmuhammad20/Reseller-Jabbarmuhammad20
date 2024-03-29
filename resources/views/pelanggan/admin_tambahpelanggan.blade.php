@extends('layouts.master')
@section('content')
	@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('warning'))
      <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('info'))
      <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        Please check the form below for errors
    </div>
    @endif
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Design <small>different form elements</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="dropdown-item" href="#">Settings 1</a>
							</li>
							<li><a class="dropdown-item" href="#">Settings 2</a>
							</li>
						</ul>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/tambahpelanggan/tambah" method="post" enctype="multipart/form-data">
					{{csrf_field() }}

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="n_toko">Nama Toko <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="n_toko" required="required" class="form-control " name="n_toko">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nama Pelanggan<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="name" required="required" class="form-control " name="name">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="email" id="email" name="email" required="required" class="form-control">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Role</label>
						<div class="col-md-6 col-sm-6 ">
							<div id="role" class="btn-group" data-toggle="buttons">
								<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
									<input type="radio" name="role" value="admin" class="join-btn"> &nbsp; Admin &nbsp;
								</label>
								<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
									<input type="radio" name="role" value="pelanggan" class="join-btn"> Pelanggan
								</label>
							</div>
						</div>
					</div>

					<div class="item form-group">
						<label for="tem_lahir" class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir</label>
						<div class="col-md-6 col-sm-6 ">
							<input id="tem_lahir" class="form-control" type="text" name="tem_lahir">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input id="tgl_lahir" class="date-picker form-control" name="tgl_lahir" placeholder="dd-mm-yyyy" type="text" required="required" type="date" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
							<script>
								function timeFunctionLong(input) {
									setTimeout(function() {
										input.type = 'text';
									}, 60000);
								}
							</script>
						</div>
					</div>

					<div class="item form-group">
						<label for="alamat" class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
						<div class="col-md-6 col-sm-6 ">
							<input id="alamat" class="form-control" type="text" name="alamat">
						</div>
					</div>
					<div class="item form-group">
						<label for="no_hp" class="col-form-label col-md-3 col-sm-3 label-align">no_hp</label>
						<div class="col-md-6 col-sm-6 ">
							<input id="no_hp" class="form-control" type="number" name="no_hp" value="62">
						</div>
					</div>

					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							<button class="btn btn-primary" type="button">Cancel</button>
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
@endsection
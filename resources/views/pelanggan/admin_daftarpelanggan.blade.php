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

<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Responsive example<small>Users</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Settings 1</a>
              <a class="dropdown-item" href="#">Settings 2</a>
            </div>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">
      <p class="text-muted font-13 m-b-30">
        Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
      </p>

      <table id="daftarpelanggan" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Toko</th>
            <th>Nama Pemilik</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>saldo</th>
            <th>Sudah Dibayar</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
      @php $no = 1; @endphp
      @foreach($users as $pelanggan)
          <tr>
            <td>{{$no++}}</td>
            <td>
              @if($pelanggan->role=='admin')
              <i class="fa fa-check"></i>
              @endif
              {{$pelanggan->n_toko}}</td>
            <td>{{$pelanggan->name}}</td>
            <td>{{$pelanggan->email}}</td>
            <td>{{$pelanggan->alamat}}</td>
            <td>{{ "Rp. " . number_format($pelanggan->saldo, 0, ",", ".") }}</td>
            <td>{{$pelanggan->sudah_dibayar}}</td>
            <td>
    				<a href="/tambah_saldocreate/{{$pelanggan->id}}" type="button" class="btn btn-success btn-sm" title="Bayar" ><i class="fa fa-money text-white"> Bayar</i></a>
  					<a href="" type="button" class="btn btn-primary btn-sm" title="Lihat"><i class="fa fa-eye text-white"> Lihat</i></a>
            
            <a href="/user/destroy/{{$pelanggan->id}}" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash text-white"> Hapus</a>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection


            
          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-body text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h3>Informasi</h3>
                    <h6>Apakah Anda yakin {{$pelanggan->name}} data akan dihapus? </h6>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    <a href="/user/destroy/{{$pelanggan->id}}" type="button" class="btn btn-primary">Iya</a>
                    {{ method_field('DELETE') }}
                  </div>
                </div>
              </div>
            </div>
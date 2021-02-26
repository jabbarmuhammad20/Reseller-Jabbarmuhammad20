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
      <h2>Pesanan<small>Harus diproses</small></h2>
      <div class="clearfix">
      </div>
    </div>
    <div class="x_content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-box table-responsive">
            </div>
          </div>
          <p class="text-muted font-13 m-b-30">
            Pengiriman akhir pukul 15.00 jika lebih akan dikirim hari selanjutnya dan Tombol hapus tidak tersedia saat status pesanan "dikirim" mohon ajukan pengembalian dana 
          </p>
          <div class="table-responsive">
          <table id="pesanan_terkonfirmasi1" class="table table-striped jambo_table">
            <thead>
              <tr>
                <th>No</th>
                <th>ID Pesanan</th>
                <th>Nama Akun</th>
                <th>Nama Penerima</th>
                <th>Tanggal Pemesanan</th>
                <th>Tanggal Dikirim</th>
                <th>Konfirmasi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach($riwayat_tranksaksi_tabel as $pesanan)
              <tr>
                @if($pesanan->pengemasan=='ya')
                @if($pesanan->dikirim=='ya')
                @if($pesanan->konfirmasi=='tidak')
                <td>{{$no++}}</td>
                <td>{{$pesanan->id}}</td>
                <td>{{$pesanan->User->name}}</td>
                <td>{{$pesanan->nm_pengirim}}</td>
                <td>{{$pesanan->created_at}}</td>
                <td>{{$pesanan->updated_at}}</td>
                <td></td>
                <td>
                <a href="/pesanan_terkonfirmasi_show/{{$pesanan->id}}" type="button" class="btn btn-primary btn-sm" ><i class="fa fa-check text-white"> Konfirmasi</a></i>

                </td>
                @endif
                @endif
                @endif
              </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
 

@endsection
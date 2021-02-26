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
        Pengiriman akhir pukul 15.00 jika lebih akan dikirim hari selanjutnya dan Tombol hapus tidak tersedia saat status pesanan "dikirim" mohon ajukan pengembalian dana 
      </p>

      <table id="historipelanggan" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>No</th>
            <th>ID </th>
            <th>Akun</th>
            <th>Nama Penerima</th>
            <th>ID Produk | Nama Produk </th>
            <th>Total Produk</th>
            <th>Saldo</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($riwayat_tranksaksi_tabel as $pesanan)
            @if($pesanan->pengemasan=='tidak')
          <tr>
            <td>{{$no++}}</td>
            <td>{{$pesanan->id}}</td>
            <td >{{$pesanan->User->name}}</td>
            <td>{{$pesanan->nm_pengirim}}</td>
            <td>{{$pesanan->k_produk}} {{$pesanan->n_produk}}</td>
            <td>{{
              ($pesanan->stok_m*$pesanan->hrg_m)+
              ($pesanan->stok_l*$pesanan->hrg_l)+
              ($pesanan->stok_xl*$pesanan->hrg_xl)+
              ($pesanan->stok_xxl*$pesanan->hrg_xxl)}}
            </td>
            <td>{{$pesanan->User->saldo}}</td>
            <td>

            <!--   Menonaktifkan Tombol Dikemas Saat Saldo Tidak Mencukupi -->
             @if ($pesanan->User->saldo > 
              ($pesanan->stok_m*$pesanan->hrg_m)+
              ($pesanan->stok_l*$pesanan->hrg_l)+
              ($pesanan->stok_xl*$pesanan->hrg_xl)+
              ($pesanan->stok_xxl*$pesanan->hrg_xxl))
              <a href="{{route('pesanan_dikemas', $pesanan->id)}}" type="button" class="btn btn-primary btn-sm" ><i class="fa fa-check text-white"></i>Kemas</a>
              </td>
            </tr>
            @endif
            @if ($pesanan->User->saldo < 
              ($pesanan->stok_m*$pesanan->hrg_m)+
              ($pesanan->stok_l*$pesanan->hrg_l)+
              ($pesanan->stok_xl*$pesanan->hrg_xl)+
              ($pesanan->stok_xxl*$pesanan->hrg_xxl))
              <a href="https://wa.me/{{$pesanan->User->no_hp}}" type="button" class="btn btn-danger btn-sm"><i class="fa fa-whatsapp "></i> Saldo Kurang</a>
              </td>
            </tr>
            @endif
            <!-- Non aktifkan Tombol dikemas -->
            @endif
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
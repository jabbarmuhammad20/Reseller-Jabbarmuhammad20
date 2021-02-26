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
      <h2>Histori<small>Pesanan</small></h2>
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
            <th>Invoice</th>
            <th>Nama Penerima</th>
            <th>ID Produk | Nama Produk </th>
            <th>Dikemas</th>
            <th>Dikirim</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
      @php $no = 1; @endphp
      @foreach($riwayat_tranksaksi_tabel as $pesanan)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$pesanan->invoice}}</td>
            <td>{{$pesanan->nm_pengirim}}</td>
            <td>{{$pesanan->k_produk}} {{$pesanan->n_produk}}</td>
            <td>{{$pesanan->pengemasan}}</td>
            <td>{{$pesanan->dikirim}}</td>
            <td>
            @if($pesanan->pengemasan=='tidak')
            <a href="" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-trash text-white"> Hapus</i></a> 
            @endif

            @if($pesanan->pengemasan=='ya')
            @if($pesanan->dikirim=='tidak')
            <a href="" type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-trash text-white"> Ajukan Pembatalan </i></a>
            @endif
            @endif

            
            @if($pesanan->dikirim=='ya')
            @if($pesanan->konfirmasi=='tidak')
            <a href="" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-check text-white"> Konfirmasi</i></a> 
            @endif
            @endif

            @if($pesanan->dikirim=='ya')
            @if($pesanan->konfirmasi=='ya')
            <a href="" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-check text-white"> Terkonfirmasi</i></a> 
            @endif
            @endif
      

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

<!--           <div class="modal-header">
          </div> -->
          <div class="modal-body text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <h3>Informasi</h3>
            <h6>Pesanan telah terkonfirmasi dan pembayaran sudah dikirim</h6>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
            <a href="" type="button" class="btn btn-primary">Iya</a>

          </div>

        </div>
      </div>
    </div>
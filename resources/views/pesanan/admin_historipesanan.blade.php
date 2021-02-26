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
            <th>ID Pesanan</th>
            <th>Nama Penerima</th>
            <th>ID Produk | Nama Produk </th>
            <th>Dikemas</th>
            <th>Dikirim</th>
            <th>Diterima</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
      @php $no = 1; @endphp
      @foreach($riwayat_tranksaksi_tabel as $pesanan)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$pesanan->id}}</td>
            <td>{{$pesanan->nm_pengirim}}</td>
            <td>{{$pesanan->k_produk}} {{$pesanan->n_produk}}</td>
            <td>
            @if($pesanan->pengemasan=='tidak')
              <i class="fa fa-close">
            @endif
            @if($pesanan->pengemasan=='ya')
              <i class="fa fa-check">
            @endif
            </td>

            <td>
            @if($pesanan->dikirim=='tidak')
              <i class="fa fa-close">
            @endif
            @if($pesanan->dikirim=='ya')
              <i class="fa fa-check">
            @endif
            </td>

            <td>
            @if($pesanan->konfirmasi=='tidak')
              <i class="fa fa-close">
            @endif
            @if($pesanan->konfirmasi=='ya')
              <i class="fa fa-check">
            @endif
            </td>
            
            <td>
            <a href="" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-trash text-white">Hapus </a></i>
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
            <h6>Apakah Anda yakin data  akan dihapus? </h6>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
            <a href="" type="button" class="btn btn-primary">Iya</a>
            {{ method_field('DELETE') }}
          </div>

        </div>
      </div>
    </div>
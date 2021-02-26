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

<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Daftar Produk</h3>
    </div>
    <div class="title_right">
    </div>
  </div>
<div class="clearfix"></div>
  <div class="row">
    @php $no = 1; @endphp
    @foreach($produk_tabel as $produk)
    
    @if($produk->stts =='publish')

    @if($produk->kategori =='kaos_polos_pendek')
    <div class="col-md-3">
      <div class="x_panel">
        <div class="x_content">
          <div class="thumbnail">
            <div class="image view view-first block">
              <img style="width: 100%;" src="storage/{{$produk->upload_produk}}" alt="image" />
              <div class="mask">
                <p>{{$produk->k_produk}}</p>
                <div class="tools tools-bottom">
                  <a href="{{action('ProdukController@show', $produk->id)}}" type="button" class="btn btn-primary">Lihat</a>
                  <!--value untuk admin--> 
                  @if(auth()->user()->role=='admin')
                  <a href="{{route('admin_editproduk', $produk->id)}}" type="button" class="btn btn-warning">Ubah</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <h6>{{ $produk->n_produk }} ({{ $produk->warna }})</h6>
            <p>{{ "Rp. " . number_format($produk->hrg_m, 0, ",", ".")}}
              {{ "Rp. " . number_format($produk->hrg_l, 0, ",", ".")}}
              {{ "Rp. " . number_format($produk->hrg_xl, 0, ",", ".")}}
              {{ "Rp. " . number_format($produk->hrg_xxl, 0, ",", ".")}}</p>
            <!--value untuk pelanggan--> 
            @if(auth()->user()->role=='pelanggan')
            <a href="{{action('RiwayatTranksaksiController@create', $produk->id)}}" type="button" class="btn btn-primary btn-block">Pesan</a>
            @endif
          </div>
        </div>
      </div>
    </div>
    @endif
    @endif
    @endforeach
  </div>  
</div>
@endsection

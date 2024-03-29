@extends('layouts.master')
@section('content')
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

    <!-- akan menampilkan data jika dipublish -->
    @if($produk->stts =='diarsipkan')
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
                  <!-- endif Admin -->
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
              {{ "Rp. " . number_format($produk->hrg_xxl, 0, ",", ".")}}
            </p>

            <!--value untuk pelanggan-->
            @if(auth()->user()->role=='pelanggan')
            <a href="{{action('RiwayatTranksaksiController@create', $produk->id)}}" type="button" class="btn btn-primary btn-block">Pesan</a>
            <!-- endif pelanggan -->
            @endif

          </div>
        </div>
      </div>
    </div>
    <!-- Endif(status) -->
    @endif
    @endforeach
  </div>
</div>
@endsection
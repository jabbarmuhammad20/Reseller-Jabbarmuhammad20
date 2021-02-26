@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Pesanan<small>{{Auth::user()->name}}</small></h2>
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
                <form class="" action="/riwayattranksaksi" method="post" enctype="multipart/form-data" novalidate>
                   {{csrf_field() }} 
                    <p>Mohon cek terlebih dahulu sebelum memesan
                    </p>
                    <span class="section">Info Produk Yang Dipesan</span>
                    
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Akun ID<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="user_id" value="{{Auth::user()->id}}" readonly="" />
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Produk ID<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" name="produk_id" value="{{$produk_tabel->id}}" readonly="" />
                        </div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Penerima<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="nm_pengirim" type="text" required=""/></div>
                    </div>

                   <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Alamat Penerima<span class="required">**</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="almt_pengirim" type="text" placeholder="Jika Menggunakan Metode B" /></div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Kode Produk<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="k_produk" value="{{$produk_tabel->k_produk}}" type="text" readonly="" /></div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Produk<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="n_produk" value="{{$produk_tabel->n_produk}}" type="text" readonly="" /></div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Warna<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="warna" value="{{$produk_tabel->warna}}" type="text" readonly="" /></div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Stok Produk Uk. M<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="stok_m" type="number"  value="0" @if($produk_tabel->stok_m=='0') readonly="" @endif  /></div>
                    </div>
                    
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Stok Produk Uk. L<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="stok_l" type="number"  value="0" @if($produk_tabel->stok_l=='0') readonly="" @endif  /></div>
                    </div>
                    
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Stok Produk Uk. XL<span class="required"> </span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="stok_xl" type="number"  value="0" @if($produk_tabel->stok_xl=='0') readonly="" @endif  /></div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Stok Produk Uk. XXL<span class="required"></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="stok_xxl" type="number" value="0" @if($produk_tabel->stok_xxl=='0') readonly="" @endif /></div>
                    </div>

                    <!-- Harga Produk -->
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Harga Produk Uk. M<span class="required"> </span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="hrg_m" type="number"  value="{{$produk_tabel->hrg_m}}" readonly="" /></div>
                    </div>
                    
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Harga Produk Uk. L<span class="required"> </span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="hrg_l" type="number"  value="{{$produk_tabel->hrg_l}}" readonly="" /></div>
                    </div>
                    
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Harga Produk Uk. XL<span class="required"> </span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="hrg_xl" type="number"  value="{{$produk_tabel->hrg_xl}}" readonly="" /></div>
                    </div>

                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Harga Produk Uk. XXL<span class="required"> </span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="hrg_xxl" type="number" value="{{$produk_tabel->hrg_xxl}}" readonly="" /></div>
                    </div>
                    
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Ket. <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="ket"  type="text" />
                        </div>
                    </div>
                    <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Upload Resi <span class="required"></span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" class='optional' name="upld_resi" type="file" /></div>
                    </div>
                    
                    <div class="ln_solid">
                        <div class="form-group">
                            <div class="col-md-6 offset-md-3">
                            @if(auth()->user()->saldo <= $produk_tabel->hrg_m)
                            <a href="" type="button" class="btn btn-danger btn-block">Saldo anda : {{auth()->user()->saldo}} Tidak Mencukupi</a>
                            <a href="" class="" data-toggle="modal" data-target="#exampleModalCenter">Bantuan</a>
                            @endif

                            @if(auth()->user()->saldo > $produk_tabel->hrg_xxl)

                            <button type='submit' class="btn btn-primary">Pesan</button>
                            <button type='reset' class="btn btn-danger">Reset</button>
                                <a href="{{action('ProdukController@daftar_produk')}}"type="cancel" class="btn btn-secondary">Kembali</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->



@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bantuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    Mohon maaf saldo anda harus lebih besar dari produk ukuran XXL<br>
    Silahkan mengisi saldo terlebih dahulu

    <br>
    <br>Ttd : Admin<br>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
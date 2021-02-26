@extends('layouts.master')
@section('content')


<div class="col-md-12">
  <div class="x_panel">
    <div class="x_title">
      <div>
        <h2>Nama akun {{$riwayat_tranksaksi_tabel->User->name}}<small>{{$riwayat_tranksaksi_tabel->User->n_toko}}
      </div>
        <ul class="nav navbar-right panel_toolbox">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#action">Proses</button></small></h2>
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          </li>
          <li></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row">
        <div class="col-sm-12">
          <div class="card-box table-responsive">
          <p class="text-muted font-13 m-b-30">
            <i class="fa fa-info text-info"></i> Pengiriman akhir pukul 15.00 jika lebih akan dikirim hari selanjutnya dan Tombol hapus tidak tersedia saat status pesanan "dikirim" mohon ajukan pengembalian dana 
          </p>
          <div class="col-sm-4 text-center mt-5">
          {!! QrCode::size(250)->generate($riwayat_tranksaksi_tabel->id) !!}
          </div>
          <div class="col-sm-8">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>No Pesanan</td>
                  <td>{{$riwayat_tranksaksi_tabel->id}}</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Kode Produk</td>
                  <td>{{$riwayat_tranksaksi_tabel->k_produk}}</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Nama Produk</td>
                  <td>{{$riwayat_tranksaksi_tabel->n_produk}} {{$riwayat_tranksaksi_tabel->warna}}</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>No Hp</td>
                  <td><a href="https://wa.me/{{$riwayat_tranksaksi_tabel->User->no_hp}}"type="button" target="blank" class="btn btn-primary btn-sm"><i class="fa fa-whatsapp "></i> {{$riwayat_tranksaksi_tabel->User->no_hp}}</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Jumlah Pesanan</td>
                  <td>{{$riwayat_tranksaksi_tabel->j_pesanan}} x {{$riwayat_tranksaksi_tabel->hrg_produk}} = {{$riwayat_tranksaksi_tabel->j_pesanan*$riwayat_tranksaksi_tabel->hrg_produk}}</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Indentitas Penerima</td>
                  <td>{{$riwayat_tranksaksi_tabel->nm_pengirim}}- {{$riwayat_tranksaksi_tabel->almt_pengirim}}</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>Keterangan</td>
                  <td>{{$riwayat_tranksaksi_tabel->ket}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <hr>
        <i class="fa fa-cut"></i>
      </div>
    </div>
  </div>
  <img src="{{ asset ('/storage/'.$riwayat_tranksaksi_tabel->upld_resi ) }}" alt="..." />
  <embed type="application/pdf" src="{{ asset ('/storage/'.$riwayat_tranksaksi_tabel->upld_resi ) }}" width="500" height="600"></embed>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="action" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail Pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form" action="{{ route('riwayattranksaksi.update', $riwayat_tranksaksi_tabel->id) }}" id="demo-form2" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
		 {{csrf_field() }}
    {{ method_field('PUT') }}
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align" for="k_produk">user Id<span class="required text-danger">*</span>
				</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" id="user_id" name="user_id" required="required" class="form-control " value="{{$riwayat_tranksaksi_tabel->user_id}}" readonly="">
				</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align" for="hrg_produk">Jumlah Total<span class="required text-danger">*</span>
				</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="integer" id="jumlah_total" name="jumlah_total" required="required" class="form-control" 
          value="{{
          ($riwayat_tranksaksi_tabel->stok_m*$riwayat_tranksaksi_tabel->hrg_m)+
          ($riwayat_tranksaksi_tabel->stok_l*$riwayat_tranksaksi_tabel->hrg_l)+
          ($riwayat_tranksaksi_tabel->stok_xl*$riwayat_tranksaksi_tabel->hrg_xl)+
          ($riwayat_tranksaksi_tabel->stok_xxl*$riwayat_tranksaksi_tabel->hrg_xxl)
        }}" readonly="">
				</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align" for="diproses">Dikemas<span class="required text-danger">*</span>
				</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" id="diproses" name="pengemasan" required="required" class="form-control" value="ya" readonly="">
				</div>
			</div>


			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align" for="dikirim">Dikirim<span class="required text-danger">*</span>
				</label>
				<div class="col-md-6 col-sm-6 ">
					<select class="form-control" aria-label="Default select example" id="dikirim" name="dikirim">
            <option selected>tidak</option>
            <option value="ya">Ya</option>
          </select>
				</div>
			</div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="dikirim">Sudah diterima/ konfirmasi<span class="required text-danger">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <select class="form-control" aria-label="Default select example" id="konfirmasi" name="konfirmasi">
            <option selected>tidak</option>
          </select>
        </div>
      </div>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Dikemas</button>
      </div>
    </div>
  </div>
</div>
		</form>
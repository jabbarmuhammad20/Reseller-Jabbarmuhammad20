@extends('layouts.master')
@section('content')

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
                  <th>ID Pesanan</th>
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
                @if($pesanan->dikirim=='tidak')
                @if($pesanan->pengemasan=='ya')
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$pesanan->id}}</td>
                  <td>{{$pesanan->nm_pengirim}}</td>
                  <td>{{$pesanan->k_produk}} {{$pesanan->n_produk}}</td>
                  <td>{{$pesanan->pengemasan}}</td>
                  <td>{{$pesanan->dikirim}}</td>
                  <td>
                    <!--   Menonaktifkan Tombol Dikemas Saat Saldo Tidak Mencukupi -->
                    @if ($pesanan->User->saldo >
                    ($pesanan->stok_m*$pesanan->hrg_m)+
                    ($pesanan->stok_l*$pesanan->hrg_l)+
                    ($pesanan->stok_xl*$pesanan->hrg_xl)+
                    ($pesanan->stok_xxl*$pesanan->hrg_xxl))
                    <a href="{{route('pesanan_dikemas', $pesanan->id)}}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-check text-white"></i>Kemas</a>
                    <form action="{{route('tranksaksi.destroy',$pesanan->id)}}" method="post">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm delete-confirm" data-id="{{$pesanan->id}}" id="delete{{$pesanan->id}}" data-name="{{ $pesanan->nm_pengirim }}" type="submit"><i class="fa fa-trash"> Batalkan</i></button>
                    </form>
                  </td>
                </tr>
                @endif
                @if ($pesanan->User->saldo < ($pesanan->stok_m*$pesanan->hrg_m)+
                  ($pesanan->stok_l*$pesanan->hrg_l)+
                  ($pesanan->stok_xl*$pesanan->hrg_xl)+
                  ($pesanan->stok_xxl*$pesanan->hrg_xxl))
                  <a href="https://wa.me/{{$pesanan->User->no_hp}}" type="button" class="btn btn-danger btn-sm"><i class="fa fa-whatsapp "></i> Saldo Kurang</a>
                  </td>
                  </tr>
                  @endif
                  <!-- Non aktifkan Tombol dikemas -->

                  @endif
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
<script>
  $('.delete-confirm').click(function(event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    swal({
        title: `Are you sure you want to delete ${name}?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          form.submit();
        }
      });
    $('delete${id}').submit();
  });
</script>
@include('sweetalert::alert')
@endsection
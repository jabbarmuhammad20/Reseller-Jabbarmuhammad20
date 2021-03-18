@extends('layouts.master')
@section('content')

<div class="col-md-12 col-sm-12 ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Pesanan<small>Belum Diproses</small></h2>
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
                  <th>Tanggal</th>
                  <th>Nama Penerima</th>
                  <th>Deskripsi</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp
                @foreach($riwayat_tranksaksi_tabel as $pesanan)
                @if ($pesanan->pengemasan=='tidak')
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$pesanan->id}}</td>
                  <td>{{$pesanan->created_at}}</td>
                  <td>{{$pesanan->nm_pengirim}}</td>
                  <td>ID Produk : {{$pesanan->k_produk}}, Nama Produk :{{$pesanan->n_produk}} {{$pesanan->uk_produk}}</td>
                  <td>
                    {{ "Rp. " . number_format(
                  ($pesanan->stok_m*$pesanan->hrg_m)+
                  ($pesanan->stok_l*$pesanan->hrg_l)+
                  ($pesanan->stok_xl*$pesanan->hrg_xl)+
                  ($pesanan->stok_xxl*$pesanan->hrg_xxl)
                , 0, ",", ".")}}
                  </td>
                  <td>
                    <form action="{{route('tranksaksi.destroy',$pesanan->id)}}" method="post">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-sm delete-confirm" data-id="{{$pesanan->id}}" id="delete{{$pesanan->id}}" data-name="{{ $pesanan->id }}" type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                </tr>
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
@endsection
@include('sweetalert::alert')
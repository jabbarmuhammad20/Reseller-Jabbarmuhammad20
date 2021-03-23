@extends('layouts.master')
@section('content')

<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3><a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
          Kategori
          <span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          @foreach ($kategori as $kategori)
          <a class="dropdown-item" href="{{route ('produkkategori.show',$kategori->slug)}}">{{$kategori->n_kategori}}</a>
          @endforeach
        </div>
      </h3>
    </div>
    <div class="title_right">
    </div>
  </div>

  <div class="clearfix"></div>
  <div class="row">
    @php $no = 1; @endphp
    @foreach($produkall as $produk)

    <!-- akan menampilkan data jika dipublish -->
    @if($produk->stts =='publish')
    <div class="col-md-3">
      <div class="x_panel">
        <div class="x_content">
          <div class="thumbnail">
            <div class="image view view-first block">
              <img style="width: 100%;" src="storage/{{$produk->upload_produk}}" alt="image" />
              <div class="mask">
                <p>{{$produk->k_produk}}</p>
                <div class="tools tools-bottom">
                  <a href="{{route ('lihat.produk', $produk->id)}}" type="button" class="btn btn-primary">Lihat</a>
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
            <a href="{{route ('create.tranksaksi', $produk->id)}}" type="button" class="btn btn-primary btn-block">Pesan</a>
            <!-- endif pelanggan -->
            @endif
            @if(auth()->user()->role=='admin')
            <form action="{{route('delete_produk',$produk->id)}}" method="post">
              @csrf
              @method('delete')
              <button class="btn btn-danger btn-sm delete-confirm" data-id="{{$produk->id}}" id="delete{{$produk->id}}" data-name="{{ $produk->id }}" type="submit">Delete</button>
            </form>
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
{{$produkall->links()}}

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
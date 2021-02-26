@extends('layouts.master')
@section('content')

<div class="">  
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Lihat Produk</h2>
          <ul class="nav navbar-right panel_toolbox">
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <div class="col-md-5">
            <div class="product-image">
              <img src="{{ asset ('storage/'. $produk_tabel->upload_produk ) }}" alt="..." />
            </div>
          </div>

          <div class="col-md-7" style="border:0px solid #e5e5e5;">

            <h3 class="prod_title">{{ $produk_tabel->k_produk }} | {{ $produk_tabel->n_produk }} {{ $produk_tabel->warna }}</h3>

            <h6>Deskripsi : <br> {!! $produk_tabel->deskripsi !!}</h6>
            <br />

            <div class="">
  
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>

                  @if ($produk_tabel->stok_m=='0')
                  <tr class="alert-danger">
                    <th scope="row">1</th>
                    <td>M</td>
                    <td>{{ ucfirst($produk_tabel->stok_m) }}</td>
                    <td>{{ "Rp. " . number_format($produk_tabel->hrg_l, 0, ",", ".") }}</td>
                  </tr>
                  @elseif ($produk_tabel->stok_m >='1')
                    <tr>
                      <th scope="row">1</th>
                      <td>M</td>
                      <td>{{ ucfirst($produk_tabel->stok_m) }}</td>
                      <td>{{ "Rp. " . number_format($produk_tabel->hrg_l, 0, ",", ".") }}</td>
                    </tr>
                  @endif

                  @if ($produk_tabel->stok_l=='0')
                  <tr class="alert-danger">
                    <th scope="row">2</th>
                    <td>L</td>
                    <td>{{ ucfirst($produk_tabel->stok_l) }}</td>
                    <td>{{ "Rp. " . number_format($produk_tabel->hrg_l, 0, ",", ".") }}</td>
                  </tr>
                  @elseif ($produk_tabel->stok_l>='1')
                    <tr>
                      <th scope="row">2</th>
                      <td>L</td>
                      <td>{{ ucfirst($produk_tabel->stok_l) }}</td>
                      <td>{{ "Rp. " . number_format($produk_tabel->hrg_l, 0, ",", ".") }}</td>
                    </tr>
                  @endif

                  @if ($produk_tabel->stok_xl=='0')
                  <tr class="alert-danger">
                    <th scope="row">3</th>
                    <td>XL</td>
                    <td>{{ ucfirst($produk_tabel->stok_xl) }}</td>
                    <td>{{ "Rp. " . number_format($produk_tabel->hrg_xl, 0, ",", ".") }}</td>
                  </tr>
                  @elseif ($produk_tabel->stok_xl >= '1')
                  <tr>
                    <th scope="row">3</th>
                    <td>XL</td>
                    <td>{{ ucfirst($produk_tabel->stok_xl) }}</td>
                    <td>{{ "Rp. " . number_format($produk_tabel->hrg_xl, 0, ",", ".") }}</td>
                  </tr>
                  @endif

                  @if ($produk_tabel->stok_xxl=='0')
                  <tr class="alert-danger">
                    <th scope="row">4</th>
                    <td>XXL</td>
                    <td>{{ ucfirst($produk_tabel->stok_xxl) }}</td>
                    <td>{{ "Rp. " . number_format($produk_tabel->hrg_xxl, 0, ",", ".") }}</td>
                  </tr>
                  @elseif ($produk_tabel->stok_xxl >= '1')
                  <tr>
                    <th scope="row">4</th>
                    <td>XXL</td>
                    <td>{{ ucfirst($produk_tabel->stok_xxl) }}</td>
                    <td>{{ "Rp. " . number_format($produk_tabel->hrg_xxl, 0, ",", ".") }}</td>
                  </tr>
                  @endif
                </tbody>
              </table>
            </div>
            <br />

            <div class="">
            </div>
            <a href="/daftar_produk" type="button" class="btn btn-secondary"> Kembali </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

        <!-- /page content -->
        @endsection
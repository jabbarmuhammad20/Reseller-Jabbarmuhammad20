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

<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Saldo Anda : <small></small></h2>
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

      <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="saldo_masuk-tab" data-toggle="tab" href="#saldo_masuk" role="tab" aria-controls="saldo_masuk" aria-selected="true">Saldo Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="saldo_keluar-tab" data-toggle="tab" href="#saldo_keluar" role="tab" aria-controls="saldo_keluar" aria-selected="false">Saldo Keluar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="riwayat-tab" data-toggle="tab" href="#riwayat" role="tab" aria-controls="riwayat" aria-selected="false">Riwayat</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="saldo_masuk" role="tabpanel" aria-labelledby="saldo_masuk-tab">
          <table id="saldoMasuk" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Akun</th>
                <th>Saldo Masuk</th>
                <th>Konfirmasi</th>
                <th>Ket.</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach($saldo_keluar_masuk_tabel as $saldo)
              @if($saldo->saldo_masuk >= 1)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$saldo->created_at}}</td>
                <td>{{$saldo->User->name}}</td>
                <td>{{ "Rp. " . number_format($saldo->saldo_masuk, 0, ",", ".") }}</td>
                <td>{{$saldo->konfirmasi}}</td>
                <td>{{$saldo->ket}}</td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade" id="saldo_keluar" role="tabpanel" aria-labelledby="saldo_keluar-tab">
          <table id="saldoKeluar" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Akun | Nama Penerima</th>
                <th>Saldo Keluar</th>
                <th>Konfirmasi</th>
                <th>Ket.</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach($saldo_keluar_masuk_tabel as $saldo)
              @if($saldo->saldo_keluar >= 1)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$saldo->created_at}}</td>
                <td>{{$saldo->User->name}} | {{$saldo->nm_penerima}}</td>
                <td>{{ "Rp. " . number_format($saldo->saldo_keluar, 0, ",", ".") }}</td>
                <td>{{$saldo->konfirmasi}}</td>
                <td>{{$saldo->ket}}</td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade" id="riwayat" role="tabpanel" aria-labelledby="riwayat-tab">
          <table id="riwayatSaldo" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Akun | Nama Penerima</th>
                <th>Saldo Masuk</th>
                <th>Saldo Keluar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php $no = 1; @endphp
              @foreach($saldo_keluar_masuk_tabel as $saldo)
              @if($saldo->saldo_keluar < 1) <tr>
                <td>{{$no++}}</td>
                <td>{{$saldo->created_at}}</td>
                <td>{{$saldo->User->name}} | {{$saldo->nm_penerima}}</td>
                <td>{{ "Rp. " . number_format($saldo->saldo_masuk, 0, ",", ".") }}</td>
                <td>{{ "Rp. " . number_format($saldo->saldo_keluar, 0, ",", ".") }}</td>
                <td>
                  <a href="" type="button" class="btn btn-primary btn-sm" title="Lihat"><i class="fa fa-eye text-white"> Lihat</i></a>
                </td>
                </tr>
                @else($saldo->saldo_keluar > 0)
                <tr class="text-danger">
                  <td>{{$no++}}</td>
                  <td>{{$saldo->created_at}}</td>
                  <td>{{$saldo->User->name}}</td>
                  <td>{{ "Rp. " . number_format($saldo->saldo_masuk, 0, ",", ".") }}</td>
                  <td>{{ "Rp. " . number_format($saldo->saldo_keluar, 0, ",", ".") }}</td>
                  <td>
                    <a href="" type="button" class="btn btn-primary btn-sm" title="Lihat"><i class="fa fa-eye text-white"> Lihat</i></a>
                  </td>
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
@endsection
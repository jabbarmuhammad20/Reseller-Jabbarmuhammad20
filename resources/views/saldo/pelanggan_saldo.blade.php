@extends('layouts.master')
@section('content')

<div class="animated flipInY col-lg-3 col-md-3  ">
    <div class="tile-stats">
      <div class="count">{{ "Rp. " . number_format($users->saldo, 0, ",", ".")}}</div>
      <h3>Saldo Anda</h3>
      <p>Lorem ipsum psdea itgum rixt.</p>
    </div>
  </div>

@endsection
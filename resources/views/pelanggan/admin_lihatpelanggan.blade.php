@extends('layouts.master')
@section('content')
      <!-- page content -->
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Biodata <small>{{$users->name}}</small></h2>
            <ul class="nav navbar-right panel_toolbox">
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="col-md-3 col-sm-3  profile_left">
              <div class="profile_img">
                <div id="crop-avatar">
                  <!-- Current avatar -->
                  <img class="img-responsive avatar-view" src="{{asset('images/img.jpg')}}" alt="Avatar" title="Change the avatar">
                </div>
              </div>
              <h3>{{$users->name}}</h3>

              <ul class="list-unstyled user_data">
                <li><i class="fa fa-map-marker user-profile-icon"></i> {{$users->alamat}}
                </li>

                <li>
                  <i class="fa fa-briefcase user-profile-icon"></i> {{$users->n_toko}}
                </li>

                <li class="m-top-xs">
                  <i class="fa fa-external-link user-profile-icon"></i>
                  <a href="http://www.kimlabs.com/profile/" target="_blank">{{$users->email}}</a>
                </li>
              </ul>

              <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
              <br />
            </div>
            <div class="col-md-9 col-sm-9 ">

              <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Profile</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Histori Saldo</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                  </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">

                    <!-- start recent activity -->
                    <table class="data table table-striped no-margin">
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Nama Lengkap</td>
                          <td>{{$users->name}}</td>
                          <td> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Nama Toko</td>
                          <td>{{$users->n_toko}}</td>
                          <td> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Email</td>
                          <td>{{$users->email}}</td>
                          <td> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Tempat & Tanggal Lahir</td>
                          <td>{{$users->tem_lahir}}, {{$users->tgl_lahir}} </td>
                          <td> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>No Hp/Wa</td>
                          <td> <a href="https://wa.me/{{$users->no_hp}}"type="button" target="blank" class="btn btn-seccondary btn-sm"><i class="fa fa-whatsapp "></i> {{$users->no_hp}}</a></td>
                          <td> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>No Rekening</td>
                          <td>{{$users->norek}} - {{$users->norek_an}} {{$users->bank}}</td>
                          <td> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>Keterangan</td>
                          <td>{{$users->ket}}</td>
                          <td> </td>
                          <td> </td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <!-- end recent activity -->

                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                    <!-- start user projects -->
                    <table class="data table table-striped no-margin">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tanggal</th>
                          <th>Saldo Masuk</th>
                          <th>Saldo Keluar</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                        @if (count ($saldo) > 0)   
                            @foreach ($saldo as $s)  
                            <tr>
                              <td>{{$no++}}</td>
                              <td>{{$s->created_at}}</td>
                              <td>{{ "Rp. " . number_format($s->saldo_masuk, 0, ",", ".") }}</td>
                              <td>{{ "Rp. " . number_format($s->saldo_keluar, 0, ",", ".") }}</td>
                              <td>{{$s->produk}}</td>
                            </tr>
                            @endforeach    
                        @else
                        <tr>
                          <td></td>
                          <td></td>
                          <td>Tidak Ada Data</td>
                          <td></td>
                          <td></td>
                        </tr>
                        @endif
                      </tbody>
                    </table>
                    <!-- end user projects -->

                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                      photo booth letterpress, commodo enim craft beer mlkshk </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- /page content -->
@endsection
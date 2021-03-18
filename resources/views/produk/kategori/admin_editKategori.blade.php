@extends('layouts.master')
@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Edit<small>Kategori</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form role="form" action="{{ route('kategori.update', $kategori->id) }}" id="demo-form2" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama Kategori <span class="required text-danger">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="n_kategori" name="n_kategori" required="required" class="form-control " value=" {{$kategori->n_kategori}}">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Slug / Keterangan <span class="required text-danger">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="slug" name="slug" required="required" class="form-control" value=" {{$kategori->slug}}">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="{{route ('kategori.create')}}" class="btn btn-secondary"> Kembali </a>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
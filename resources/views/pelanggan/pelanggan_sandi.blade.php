@extends('layouts.master')
@section('content')
<div class="x_panel">
    <div class="x_title">
        <h2>Form Ubah Kata Sandi</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="col-md-10 center-margin">
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="currentPassword">Kata Sandi Saat Ini <span class="required text-danger">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="password" id="currentPassword" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="newPassword">Kata Sandi Baru <span class="required text-danger">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="password" id="newPassword" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="verifyPassword">Verifikasi Kata Sandi Baru <span class="required text-danger">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="password" id="verifyPassword" required="required" class="form-control">
                    </div>
                </div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <br>
                        <a href="/home" class="btn btn-secondary" type="button">Kembali</a>
                        <button class="btn btn-danger" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
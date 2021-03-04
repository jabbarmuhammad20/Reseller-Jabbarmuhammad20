@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
<div class="x_panel">
    <div class="x_title">
        <h2>Form Ubah Kata Sandi</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="col-md-10 center-margin">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.update') }}">

                {{ csrf_field() }}
                {{ method_field('put') }}

                <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                    <label for="current_password" class="col-md-4 control-label">Current Password</label>

                    <div class="col-md-6">
                        <input id="current_password" type="password" class="form-control" name="current_password" autofocus>
                        <span class="help-block">{{ $errors->first('current_password') }}</span>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">New Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password_confirmation" class="col-md-4 control-label">New Password Confirmation</label>

                    <div class="col-md-6">
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                        <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Change Password
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
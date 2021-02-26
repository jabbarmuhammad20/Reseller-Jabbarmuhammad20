@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div></div>

                        <div class="form-group row">
                            <label for="sebagai" class="col-md-4 col-form-label text-md-right">{{ __('Sebagai') }}</label>
                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control" name="role" value="admin">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="n_toko" class="col-md-4 col-form-label text-md-right">{{ __('Nama Toko') }}</label>
                            <div class="col-md-6">
                                <input id="n_toko" type="text" class="form-control" name="n_toko">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tem_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tempat Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="tem_lahir" type="text" class="form-control" name="tem_lahir">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_lahir" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>
                            <div class="col-md-6">
                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="norek" class="col-md-4 col-form-label text-md-right">{{ __('No Rekening') }}</label>
                            <div class="col-md-6">
                                <input id="norek" type="text" class="form-control" name="norek" value="{{ old('norek') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="norek_an" class="col-md-4 col-form-label text-md-right">{{ __('Nama Rekening') }}</label>
                            <div class="col-md-6">
                                <input id="norek_an" type="text" class="form-control" name="norek_an" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bank" class="col-md-4 col-form-label text-md-right">{{ __('Bank') }}</label>
                            <div class="col-md-6">
                                <input id="bank" type="text" class="form-control" name="bank" value="{{ old('bank') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="belum_dibayar" class="col-md-4 col-form-label text-md-right">{{ __('belum_dibayar') }}</label>
                            <div class="col-md-6">
                                <input id="belum_dibayar" type="text" class="form-control" name="belum_dibayar" value="0">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sudah_dibayar" class="col-md-4 col-form-label text-md-right">{{ __('sudah_dibayar') }}</label>
                            <div class="col-md-6">
                                <input id="sudah_dibayar" type="text" class="form-control" name="sudah_dibayar" value="0">
                            </div>
                        </div>      

                        <div class="form-group row">
                            <label for="ket" class="col-md-4 col-form-label text-md-right">{{ __('Ket') }}</label>
                            <div class="col-md-6">
                                <input id="ket" type="text" class="form-control" name="ket" value="0">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

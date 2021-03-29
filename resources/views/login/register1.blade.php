<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../landingpage/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../landingpage/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../landingpage/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../landingpage/css/style.css">

    <title>Login|Reseller</title>
    <style>
        body {
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="../landingpage/images/reseller.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Daftar<strong>Reseller</strong></h3>
                                <p class="mb-4">Official Wame Store</p>
                            </div>
                            <form action="/register_store" method="post" enctype="multipart/form-data">
                                {{csrf_field() }}
                                <div class="form-group first">
                                    <label for="name">Nama / Username</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <div class="form-group first">
                                    <label for="tem_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('tem_lahir') is-invalid @enderror" id="tem_lahir" name="tem_lahir" value="{{ old('tem_lahir') }}" required autocomplete="tem_lahir">
                                    @error('tem_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="tgl_lahir"></label>
                                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tegl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required autocomplete="tgl_lahir">
                                    @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="no_hp">No Hp/Wa </label>
                                    <input type="number" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp">
                                    @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group first">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" required autocomplete="email">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn text-white btn-block btn-primary">
                                    {{ __('Daftar') }}
                                </button>

                                <span class="d-block text-left my-4 text-muted">Sudah punya akun reseller ? <a href="/login1">Login </a></span>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    @include('sweetalert::alert')

    <script src="../landingpage/js/jquery-3.3.1.min.js"></script>
    <script src="../landingpage/js/popper.min.js"></script>
    <script src="../landingpage/js/bootstrap.min.js"></script>
    <script src="../landingpage/js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
@include('m/header')

<body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
        <div class="spinner-grow text-secondary" role="status">
            <div class="sr-only">Loading...</div>
        </div>
    </div>
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
        <!-- Background Shape-->
        <div class="background-shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5"><img class="big-logo"
                        src="img/core-img/logo-white.png" alt="">
                    <!-- Register Form-->
                    <div class="register-form mt-5 px-4">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group text-start mb-4"><span>{{ __('E-Mail Address') }}</span>
                                <label for="username"><i class="lni lni-user"></i></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="example@gmail.com">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group text-start mb-4"><span>Password</span>
                                <label for="password"><i class="lni lni-lock"></i></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <button class="btn btn-warning btn-lg w-100" type="submit">Log In</button>
                        </form>
                    </div>
                    <!-- Login Meta-->
                    <div class="login-meta-data"><a class="forgot-password d-block mt-3 mb-1"
                            href="forget-password.html">Forgot Password?</a>
                        <p class="mb-0">Didn't have an account?<a class="ms-1" href="register.html">Register Now</a></p>
                    </div>
                    <!-- View As Guest-->
                    <div class="view-as-guest mt-3"><a class="btn" href="home.html">View as Guest</a></div>
                </div>
            </div>
        </div>
    </div>
    @include('m/footer')

    <!-- Mirrored from designing-world.com/suha-v2.5.0/login.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Nov 2021 14:32:52 GMT -->

</html>
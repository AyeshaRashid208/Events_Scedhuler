<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/stylestrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">

    <title>SMM Project</title>
</head>

<body>
    <div class="limiter">
        <!-- <nav class="logo-fixedtop fixed-top d-none d-lg-block">
            <a href="index.html"><img class="" width="160" src="files/frontend/images/logo-complete-white.svg" alt=""></a>
        </nav> -->
        <div class="container-login100">
            <div class="wrap-login100 align-items-center vh-100">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" class="login100-form row m-0 validate-form"
                    action="{{ route('password.email') }}">
                    @csrf
                    <div class="col-xl-12">
                        <div class="mb-4">
                            <h5 class="login100-form-title">Reset Password</h5>
                            <p class="m-0 fontsize14">Enter your email address and we'll send you an email with
                                instructions to reset your password.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label for="username" class="fontsize14 fontweightmeduim mb-2">Email </label>
                                <div class="wrap-input100 validate-input mb-0" data-validate="">
                                    <input
                                        class="input100 form-control border-radius100 {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        autocomplete="off" placeholder="example@gmail.com" type="email" id="email"
                                        name="email" value="{{ old('email') }}">
                                    <span class="focus-input100"></span>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!--  -->
                        <div class="container-login100-form-btn"><button class="login100-form-btn">Reset</button></div>
                    </div>
                </form>
                <div class="login100-more vh-100"
                    style="background-image: url('assets/files/frontend/images/bg-01.jpg');">
                    <div class="tecmyer-logo"><span class="logo animate-img">
                            <div class="floating"><img class="img-fluid"
                                    src="{{ asset('assets/images/Dashboard_screen2.png') }}"></div>
                        </span></div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/theme-jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/function.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/stylestrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">

    <title>SMM Project</title>
</head>

<body>
    <div class="limiter">
        <!-- <nav class="logo-fixedtop fixed-top d-none d-lg-block">
            <a href="index.html"><img class="" width="160" src="files/frontend/images/logo-complete-white.svg" alt=""></a>
        </nav> -->
        <div class="container-login100">
            <div class="wrap-login100 align-items-center vh-100">
                    <form action="{{ route('login') }}" class="login100-form row m-0 validate-form" method="POST">
                        @csrf
                        
                    <div class="col-xl-12">
                        <div class="mb-4">
                            <h5 class="login100-form-title">Hi, Welcome Back!</h5>
                            <p class="m-0 fontsize14">See your growth and get consulting support!</p>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <!--  -->
                        <div class="mt-4 d-flex align-items-center justify-content-around">
                            <a href="#" class="btn btn-app">Sign in to Google</a>
                            <a href="#" class="btn btn-app"><i class="fab fa-apple me-3"></i> Sign in to Apple</a>
                        </div>
                        <!--  -->
                        <p class="py-4 m-0 paragraph_text fontsize14 text-center">Or Sign in Email</p>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label for="username" class="fontsize14 fontweightmeduim mb-2">Email </label>
                                <div class="wrap-input100 validate-input mb-0" data-validate="">
                                    <input class="input100 form-control border-radius100" autocomplete="off" placeholder="example@gmail.com" type="email" id="email" name="email">
                                    <span class="focus-input100"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="username" class="fontsize14 fontweightmeduim mb-2">Password </label>
                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                    <input class="input100 form-control border-radius100" type="password" id="password" placeholder="Enter Password" name="password">
                                    <span class="focus-input100"></span>
                                    <div class="eye"><img class="img-fluid" src="{{asset('assets/images/eye.png')}}" alt="icon" /></div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="my-3 d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label fontweightmeduim fontsize14" for="flexCheckDefault">Remember Me</label>
                                </div>
                                <a href="{{ route('password.request') }}" class="ms-auto fontsize14 fontweightmeduim blue_text">Forgot password?</a>
                            </div>
                        </div>
                        <!--  -->
                        <div class="container-login100-form-btn"><button type="submit" class="login100-form-btn">Login</button></div>
                        <!--  -->
                        <div class="text-start mt-4 w-100">
                            <p class="black_text fontsize14 m-0">Not registered yet? <a href="{{route('register')}}" class="fontsize14 ml-4 text-decoration-underline"><strong class="blue_text">Create an Account</strong></a></p>
                        </div>
                    </div>
                </form>
                <div class="login100-more vh-100" style="background-image: url('files/frontend/images/bg-01.jpg');">
                    <div class="tecmyer-logo"><span class="logo animate-img"><div class="floating"><img class="img-fluid" src="{{asset('assets/images/Dashboard_screen2.png')}}"></div></span></div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/theme-jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/function.js')}}"></script>
</body>

</html>


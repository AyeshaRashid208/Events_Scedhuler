@php
    $media = media();
@endphp
<!doctype html>
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
	@yield('style')
    <title>@yield('page_title')</title>
</head>

<body class="sc5">
    <!-- header -->
    <header class="header fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-11 mx-auto">
                <div class="desktop d-none d-lg-block">
                    <div class="d-flex align-items-center justify-content-between">
                        <a class="navbar-brand m-0 text-white" href="javascript:;">Polydigit</a>
                        <!--  -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Solution</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="javascript:;">Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="javascript:;">Resource</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="javascript:;">Blog</a>
                            </li>
                        </ul>
                        <!--  -->
                        <a href="{{route('register')}}" class="btn registration_btn">Make Registration</a>
                    </div>
                </div>
                <!--  -->
                <div class="mobile d-block d-lg-none">
                    <div class="d-flex align-items-center justify-content-between">
                        <a class="navbar-brand m-0 text-white" href="javascript:;">Polydigit</a>
                        <button class="btn btn-bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><img class="img-fluid" width="4" src="{{asset('assets/images/baricon.svg')}}" alt="icon"/></button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <!-- footer -->
    <footer class="footer">
        <div class="col-xxl-9 col-xl-9 col-lg-10 col-11 mx-auto">
            <div class="row align-items-center text-center text-lg-start">
                <div class="col-xl-3 col-lg-3 col-12 mb-4 mb-lg-0">
                    <a href="index.html" class="navbar-brand m-0">Polydigit.</a>
                </div>
                <!--  -->
                <div class="navbar-nav col-xl-5 col-lg-5 col-12 text-center">
                    <ul class="list-unstyled m-0">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Solution</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="javascript:;">Plans</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:;">Resource</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:;">Blog</a></li>
                    </ul>
                </div>
                <!--  -->
                <div class="col-xl-4 col-lg-4 col-12 text-center">
                    <ul class="list-unstyled m-0 social_icons">
                        @foreach ($media as $item)
                        <li class="nav-item"><a href="{{$item->link??''}}" title="{{$item->name??''}}" class="nav-link"><i class="{{$item->icon??''}}"></i></a></li>
                        @endforeach
                        {{-- <li class="nav-item"><a href="javascript:;" class="nav-link"><i class="fab fa-instagram"></i></a></li>
                        <li class="nav-item"><a href="javascript:;" class="nav-link"><i class="fab fa-youtube"></i></a></li> --}}
                    </ul>
                </div>
            </div>
            <hr/>
            <p class="m-0 p-3 fontsize14 text-center">Copyright © 2022 Polydigit </p>
        </div>
    </footer>
    <!-- back-to-top -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div>
    <!--  -->
    <div class="offcanvas offcanvas_header offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            zxc
        </div>
    </div>
    <script src="{{asset('assets/js/theme-jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/function.js')}}"></script>
	@yield('script')
</body>

</html>
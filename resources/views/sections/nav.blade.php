<!-- ##### Header Area Start ##### -->
<nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/"><span><!-- <img src="/assets/img/core-img/logo.png" alt="logo"> --></span> Sparal</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Features & Benefit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                @auth
                    <li class="lh-55px"><a href="{{ url('dashboard') }}" class="btn login-btn ml-50">Dashboard</a></li>
                @else
                    <li class="lh-55px"><a href="{{ route('login') }}" class="btn login-btn ml-50">Login</a></li>
                     <li class="lh-55px"><a href="{{ route('register') }}" class="btn login-btn ml-2">Sign up</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- ##### Header Area End ##### -->
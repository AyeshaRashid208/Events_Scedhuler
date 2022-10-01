<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
	<link href="http://fonts.cdnfonts.com/css/sofia-pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>

	<header>
		<div class="container"> 
			<nav class="navbar navbar-expand-lg ">
				<a class="navbar-brand" href="#"><img src="/assets/images/logo.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Explore
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Actio1n</a>
								<a class="dropdown-item" href="#">Another</a>
								<a class="dropdown-item" href="#">else </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Learn
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another</a>
								<a class="dropdown-item" href="#">else </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Practice
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another</a>
								<a class="dropdown-item" href="#">else </a>
							</div>
						</li>

					</ul>
					<form class="form-inline my-2 my-lg-0">
						<button class="btn outline-btn mr-4" type="submit">Apply</button>
						<button class="btn fill-btn" type="submit">signup/login</button>
					</form>
				</div>
			</nav>
		</div>
	</header>
    @yield('content')
    <footer>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-3 address">
						<img src="/assets/images/logoewhite.png">
						<p class="mt-5"><img src="/assets/images/location-cross.svg">Kemp House, 152 - 160 City Road, London, EC1V 2NX</p>
						<p><img src="/assets/images/sms-tracking.png">support@ukvisajobs.com</p>
						<p><img src="/assets/images/call-incoming.png">0112-345-345-5544</p>
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<h3>Quick Links</h3>
						<ul>
							<li><a href="#">Experienced Hire Jobs</a></li>
							<li><a href="#">Students & Graduate Jobs</a></li>
							<li><a href="#">Resources</a></li>
							<li><a href="#">About Us</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<h3>Resources</h3>
						<ul>
							<li><a href="#">Blogs & News</a></li>
							<li><a href="#">Recent Activities</a></li>
							<li><a href="#">eBook and Papers</a></li>
							<li><a href="#">Images and Update </a></li>
						</ul>
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<h3> Support</h3>
						<ul>
							<li><a href="#">Customer Support</a></li>
							<li><a href="#">Delivery Details</a></li>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">Privacy Policy </a></li>
						</ul>
					</div>
				</div>
				<hr style="border-color: gray;">
				<div class="row">
					<div class="col-12 col-md-5">
						<div class=" d-flex justify-content-between align-items-center flex-wrap" >
							<a href="#">Privacy Policy</a>
							<a href="#">Terms & Conditions</a>
							<a href="#">Support</a>
						</div>
					</div>
					<div class="col-12 col-md-7">
						<p class="text-muted  text-center text-md-right">© Copyright 2022, All Rights Reserved</p>
					</div>
				</div>
			</div>
			
		</footer>
		<script src="/assets/js/jquery-3.2.1.slim.min.js"></script>
		<script src="/assets/js/popper.min.js" ></script>
		<script src="/assets/js/bootstrap.min.js" ></script>
	

</body>
</html>
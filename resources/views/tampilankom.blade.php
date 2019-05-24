<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>{{$item->nama}}</title>
	<meta charset="UTF-8">
	<meta name="description" content="Photo Gallery HTML Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="/css/animate.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="/css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Top right elements -->
	<div class="spacial-controls">
		<div class="search-switch"><img src="/img/search-icon.png" alt=""></div>
		<div class="nav-switch-warp">
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
		</div>
	</div>
	<!-- Top right elements end -->

	<div class="main-warp">
		<!-- header section -->
		<header class="header-section">
			<div class="header-close">
				<i class="fa fa-times"></i>
			</div>
			<div class="header-warp">
				<a href="" class="site-logo">
					Komunitas
				</a>
				<img src="/img/menu-icon.png" alt="" class="menu-icon">
				<ul class="main-menu">
					<li><a href="/">Home</a></li>
                    <li><a href="/komunitas">Komunitas</a></li>
                    @auth
					<li><a href="/tampilankom/update/{{$item->id}}">Update</a></li>
                    <li><a href="/tampilankom/delete/{{$item->id}}">Delete</a></li>
                    @endauth
					<li><a href="#">Contact</a></li>
				</ul>
				<div class="social-links-warp">
					<div class="social-links">
						<a href=""><i class="fa fa-behance"></i></a>
						<a href=""><i class="fa fa-dribbble"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="social-text">Find us on</div>
				</div>
			</div>
			<div class="copyright">Colorlib 2018  @ All rights reserved</div>
		</header>
		<!-- header section end -->

		<!-- Page section -->
		<div class="page-section gallery-single-page">
			<div class="gallery-single-warp">
				<div class="row">
					<div class="col-xl-6 p-0">
						<div class="gallery-single-slider owl-carousel">
							<img src="/storage/{{substr($item->foto, 7)}}" alt="">
							
						</div>
					</div>
					<div class="col-xl-6 p-0">
						<div class="gallery-single-text">
							<span>Join US!</span>
							<h2>{{$item->nama}}</h2>
							<ul>
								<li><span>Daerah:</span>{{$item->daerah}}</li>
                                <li><span>Tlp:</span>{{$item->telfon}}</li>
								<li><span>Deskripsi:</span></li>
							</ul>
							<p>{{$item->deskripsi}}</p>
							<button type="button" role="presentation" class="btn btn-dark">Join for more information</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Page section end-->
	</div>

	<!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">x</div>
			<form class="search-moderl-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.nicescroll.min.js"></script>
	<script src="/js/isotope.pkgd.min.js"></script>
	<script src="/js/imagesloaded.pkgd.min.js"></script>
	<script src="/js/circle-progress.min.js"></script>
	<script src="/js/main.js"></script>

	</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Article</title>
<style>
.button {
  background: #fe435b;
  border-radius: 25px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>


<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>Nature Nusantara</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="/home">Home</a></li>
								<li class="main_nav_item"><a href="komunitas">Community</li>
								<li class="main_nav_item"><a href="campaign">Campaign</a></li>
								<li class="main_nav_item active"><a href="artikel">Article</a></li>
								
								@guest
								<li class="main_nav_item"><a href="{{ route('register') }}">Register</a></li>								
								<li class="main_nav_item"><a href="{{ route('login') }}" >Login</a></li>
								@endguest
								@auth
								<div class="dropdown">
								<button class="dropbtn">{{ Auth::user()->name }}</button>
								
								<div class="dropdown-content">
								<a href="profil">Profile</a>
  								<a href="komunitas">Add community</a>
								<a href="camp">Add campaign</a>
								<a href="artpost">Add article</a>
  								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
  								</div>
								</div>								
            					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              					@csrf
            					</form>
								@endauth
			
							</ul>
						</nav>

						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="/">Home</a></li>
					<li class="menu_item menu_mm"><a href="komunitas">Community</a></li>
					<li class="menu_item menu_mm"><a href="artikel">Articles</a></li>
					<li class="menu_item menu_mm"><a href="campaign">Campaigns</a></li>
					<li class="menu_item menu_mm"><a href="aboutUs">About Us</a></li>
					<li class="menu_item menu_mm"><a href="contact">Contact</a></li>	
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/gunung.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Article
							@auth
							<a style="position: absolute; right: 5px; background:#fe435b"href="artpost" class="button">Add Post</a>
							@endauth
							</div>
							<div class="home_breadcrumbs">

								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.html">Home</a></li>
									<li class="home_breadcrumb">Article</li>
								
								</ul>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	
	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-9">
					<div class="news_posts">
						@foreach($posts as $post)
						<!-- News Post -->
						<div class="news_post">
							<div class="post_title"><a href="/IsiArtikel/{{$post->id}}">{{ $post->title }}</a></div>
							<div class="post_meta">
								<ul>
									<li><a >By {{ $post->name }}</a></li>
									<li>{{ $post->created_at }}</li>
									<li><a >{{$post->comments->count()}} {{ str_plural('comment', $post->comments->count()) }}</a></li>
								</ul>
							</div>
							<div class="post_image">
								<img src="{{asset($post->image)}}">
								<!-- <a href="#"><div class="post_image_box text-center">+</div></a> -->
							</div>
							<div >
								<!-- <p style="position: absolute; right:40px;"> {{ $post->body }} </p> -->
								<p> {{ $post->desc }} </p>
							
							</div>
						</div>
						@endforeach
					</div>
				</div>							

				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						<div class="sidebar_search">
							<input type="search" class="sidebar_search_input" placeholder="Search">
						</div>

						<!-- Featured Posts -->
						<div class="sidebar_featured">

							<!-- Featured Post -->
							<div class="sidebar_featured_post">
								<div class="sidebar_featured_image"><img src="images/sidebar_featured_1.jpg" alt=""></div>
								<div class="sidebar_featured_title"><a href="#">Top destinations in Indonesia</a></div>
								<div class="sidebar_featured_meta">
									<ul>
										<li><a href="#">by nana</a></li>
										<li>january 31, 2018</li>
										<li><a href="#">3 comments</a></li>
									</ul>
								</div>
							</div>

							<!-- Featured Post -->
							<div class="sidebar_featured_post">
								<div class="sidebar_featured_image"><img src="images/sidebar_featured_2.jpg" alt=""></div>
								<div class="sidebar_featured_title"><a href="#">Best beaches in the world</a></div>
								<div class="sidebar_featured_meta">
									<ul>
										<li><a href="#">by ayu</a></li>
										<li>january 31, 2018</li>
										<li><a href="#">3 comments</a></li>
									</ul>
								</div>
							</div>

							<!-- Featured Post -->
							<div class="sidebar_featured_post">
								<div class="sidebar_featured_image"><img src="images/sidebar_featured_3.jpg" alt=""></div>
								<div class="sidebar_featured_title"><a href="#">Best beaches in the world</a></div>
								<div class="sidebar_featured_meta">
									<ul>
										<li><a href="#">by nayu</a></li>
										<li>january 31, 2018</li>
										<li><a href="#">3 comments</a></li>
									</ul>
								</div>
							</div>

						</div>

						<!-- Offers -->
						<div class="sidebar_offers">

							<!-- Offer -->
							<div class="sidebar_offer">
								<div class="sidebar_offer_background" style="background-image:url(images/offer_1.jpg)"></div>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_destination">bali</div>
									<div class="sidebar_offer_percent">38%</div>
									<div class="sidebar_offer_title">Last Minute Offer</div>
									<div class="sidebar_offer_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris.</div>
									<div class="sidebar_offer_button"><a href="offers.html">See Offer</a></div>
								</div>
							</div>

							<!-- Offer -->
							<div class="sidebar_offer">
								<div class="sidebar_offer_background" style="background-image:url(images/offer_2.jpg)"></div>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_destination">bali</div>
									<div class="sidebar_offer_percent">25%</div>
									<div class="sidebar_offer_title">Last Minute Offer</div>
									<div class="sidebar_offer_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris.</div>
									<div class="sidebar_offer_button"><a href="offers.html">See Offer</a></div>
								</div>
							</div>

						</div>

						<!-- Sidebar Quote -->
						<div class="sidebar_quote">
							<div class="quote_box"><img src="images/quote.png" alt=""></div>
							<div class="quote_text"><span>“Traveling</span> – it leaves you speechless, then turns you into a storyteller.”</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_content">
						<div class="newsletter_title text-center">Subscribe to our Article</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
									<input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
									<button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_about">
						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>Nature Nusantara</div>
								
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>
						<div class="footer_about_text">Nature Nusantara adalah website informasi flora dan fauna di Indonesia serta menjaring komunitas-komunitas pecinta alam diseluruh Indonesia untuk ikut andil dalam melindungi flora dan fauna di Indonesia.</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_latest">
						<div class="footer_title">Latest Article</div>
						<div class="footer_latest_content">

							<!-- Footer Latest Post -->
							<div class="footer_latest_item">
								<div class="footer_latest_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@peecho"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.html">Sumatera Summer</a></div>
									<div class="footer_latest_item_date">Jan 09, 2018</div>
								</div>
							</div>

							<!-- Footer Latest Post -->
							<div class="footer_latest_item">
								<div class="footer_latest_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@sanfrancisco"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.html">A perfect vacation</a></div>
									<div class="footer_latest_item_date">Jan 09, 2018</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="tags footer_tags">
						<div class="footer_title">Tags</div>
						<ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
							<li class="tag"><a href="#">travel</a></li>
							<li class="tag"><a href="#">summer</a></li>
							<li class="tag"><a href="#">cruise</a></li>
							<li class="tag"><a href="#">beach</a></li>
							<li class="tag"><a href="#">offer</a></li>
							<li class="tag"><a href="#">vacation</a></li>
							<li class="tag"><a href="#">trip</a></li>
							<li class="tag"><a href="#">city break</a></li>
							<li class="tag"><a href="#">adventure</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/news_custom.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ url('styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ url('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/responsive.css') }}">



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('//fonts.googleapis.com/css?family=Quicksand') }}" />
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">

    <title>KW Cell</title>
      <!-- bottom content -->
  </head>
  <body>
      

    <!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="{{ url('/') }}">KW CELL</a></div>
							<nav class="main_nav">
								<ul>
									<li class="hassubs active">
										<a href="{{ url('/') }}">Home</a>
										<ul>
											<li><a href="{{ url('/allproducts') }}">Product</a></li>
											<li><a href="{{ url('/cart') }}">Cart</a></li>
											<li><a href="{{ url('/checkout') }}">Check out</a></li>	
																					</ul>
									</li>
									<li class="hassubs">
										<a href="{{ url('/allproducts') }}">Products</a>
										<ul>
											<li><a href="{{ url('/apple') }}">Apple</a></li>
											<li><a href="{{ url('/samsung') }}">Samsung</a></li>
											<li><a href="{{ url('/oppo') }}">Oppo</a></li>
											<li><a href="{{ url('/xiaomi') }}">Xiaomi</a></li>
										</ul>
									</li>
									<li><a href="{{ url('/aboutus') }}">About Us</a></li>
									<li><a href="{{ url('/signup') }}">Sign Up</a></li>
									<li><a href="{{ url('/signin') }}">Sign In</a></li>
								</ul>
							</nav>
							<div class="header_extra ml-auto">
								<div class="shopping_cart">
									<a href="{{ url('/cart') }}">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
											<g>
												<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
											</g>
										</svg>
										<div>Cart <span></span></div>
									</a>
								</div>
								
								
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		
	</header>
     
    @yield('container')

    <div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" ><img src="{{url('images/footer.jpg')}}" alt="" class="footer_background"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#"><img src="kwcell_logo.jpg" alt=""></a></div>
						<div class="copyright ml-auto mr-auto">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<a href="https://international.binus.ac.id/" target="_blank" > Binus University International</a><br>Created By Kennyvito & Wely</div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="https://instagram.com/kwcell.id" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="https://facebook.com/kwcell" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/kwcell.id" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
<script src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ url('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ url('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ url('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ url('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ url('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ url('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ url('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ url('plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ url('plugins/easing/easing.js') }}"></script>
<script src="{{ url('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>

<script src="{{ url('js/wow.min.js') }}"></script>
              <script>
              new WOW().init();
              </script>
  </body>
</html>

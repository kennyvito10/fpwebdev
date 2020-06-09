@extends('layout/header')

@section('container')
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>


<!-- Home -->

<div class="home wow bounceInDown">
		<div class="home_container">
			<div class="home_background" style="background-image:url(assets/aboutus.png)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="{{ url('/') }}">Home</a></li>
										<li>About Us</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	
	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title wow fadeInDown">What is KW Cell?</div>
						<div class="section_subtitle wow fadeInDown">KW Cell is an online marketplace where you can purchase brand new phone at the lowest price of all online markets. A Final Web Development and Security Project created by : <br><br><br><br></div>
					<div class="row">
						<div class="col-xl-6 wow zoomIn"><img src="assets/kenny.png" alt=""></div>
						<div class="wow zoomIn"><img src="assets/wely.png" alt=""></div>
					</div>
					<div class="row">
						<div class="section_subtitle col-xl-6 wow fadeInUp">Klementinus Kennyvito Salim<br>2201811391 - Binus University International</div>
						<div class="section_subtitle col-xl-6 wow fadeInUp">Wely Dharma Putra<br>2201808365 - Binus University International</div>
					</div>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col wow bounceInRight">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Customer Support</div>
							<ul>
								<li>Phone: <span>+62 818 8888 8888</span></li>
								<li>Email: <span>kwcell@gmail.com</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Shipping & Returns</div>
							<ul>
								<li>Phone: <span>+62 808 8888 8888</span></li>
								<li>Email: <span>kwcell_return@gmail.com</span></li>
								<li>Address: <span>ITC Roxy Mas Blok C45</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Information</div>
							<ul>
								<li>Facebook : <span>KW Cell</span></li>
								<li>Instagram: <span>@kwcell.id</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row map_row">
				<div class="col">


				</div>
			</div>
		</div>
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
@endsection
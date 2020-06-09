@extends('layout/header')

@section('container')

<head>
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider wow bounceInDown">
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/phones.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new experience</div>
										<div class="home_slider_subtitle">The Best Place to Buy Your New Phone</div>
										<div class="button button_light home_button"><a href="{{ url('/allproducts') }}">Browse Phones</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/iphonepro.png)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">iPhone 11 Pro</div>
										<div class="home_slider_subtitle">Available Now.</div>
										<div class="button button_light home_button"><a href="{{ url('/apple') }}">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(assets/s20.png)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Samsung Galaxy S20</div>
										<div class="home_slider_subtitle">The Future is Here.</div>
										<div class="button button_light home_button"><a href="{{ url('/samsung') }}">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->
			
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.</li>
									<li class="home_slider_custom_dot">02.</li>
									<li class="home_slider_custom_dot">03.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</div>

    	<!-- Ads -->

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small  wow fadeInLeft">
				<div class="avds_background" style="background-image:url(assets/iphone11.jpg)"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						
						<div>
							<div class="avds_discount">
								<div>20<span>%</span></div>
								<div>Discount</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">Smart Phones</div>
						<div class="avds_link"><a href="{{ url('/product') }}">See More</a></div>
					</div>
				</div>
			</div>
			<div class="avds_large wow fadeInRight">
				<div class="avds_background" style="background-image:url(assets/oppo.jpg)"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Oppo Find X2 Pro</div>
						<div class="avds_text">With Snapdragon 865 Processor</div>
						<div class="avds_link avds_link_large"><a href="{{ url('/oppo') }}">Learn more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col wow bounceInLeft">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Free Shipping Throughout Indonesia</div>
						<div class="icon_box_text">
							<p>Do Not Worry About Shipping Costs. Any Order will be Shipped with No Charge At All. </p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col  wow bounceInDown">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Full Warranty</div>
						<div class="icon_box_text">
							<p>Any Faulty Device can be entitled to a Full Replacement unless it is Hardware Damage. </p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col wow bounceInRight">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">24h Full Support</div>
						<div class="icon_box_text">
							<p>Any Questions? Feel Free to Contact Us Anytime.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	
	

@endsection
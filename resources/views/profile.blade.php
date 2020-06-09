@extends('layout/dashboard')

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
			<div class="home_background" style="background-image:url(assets/samsung.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="{{ url('/') }}">Home</a></li>
										<li>Profile</li>
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
						<div class="section_title">Your Account</div>
						<div class="contact_form_container">
						<!-- <form method="post" action="{{ Session::get('id') }}">
                <input  type="hidden" name="_token" value="{{csrf_token()}}"> -->
				<form method="post" action="update/{{ Session::get('id') }}" style="display:inline-block">
                                @method('patch')
                                @csrf
								

								<div class="row">
									<div class="col-xl-6">
										<!-- Email -->
										<label for="contact_name">E-mail*</label>
										<input type="text" name="email" id="email" class="contact_input" required="required" readonly="readonly" value="{{ Session::get('email') }}">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- password -->
										<label for="contact_last_name">Password</label>
										<input type="password" name="password" id="password" class="contact_input" readonly="readonly" value="000000000000000000000">
									</div>
								</div>

								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="contact_name">Name*</label>
										<input type="text" name="fullName" id="name" class="contact_input" required="required" value="{{ Session::get('fullName') }}">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="contact_last_name">Phone Number*</label>
										<input type="text" name="phoneNumber" id="number" class="contact_input" required="required" value="{{ Session::get('phoneNumber') }}">
									</div>
								</div>

								<div class="row">
									<div class="col-xl-6">
										<!-- Address Line -->
										<label for="contact_name">Province*</label>
										<input type="text" name="province" id="province" class="contact_input" required="required" value="{{ Session::get('province') }}">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Street -->
										<label for="contact_last_name">City*</label>
										<input type="text" name="city" id="city" class="contact_input" required="required" value="{{ Session::get('city') }}">
									</div>
								</div>

								<div>
									<!-- Address -->
									<label for="contact_company">Address*</label>
									<input type="text" name="address" id="address" class="contact_input" required="required" value="{{ Session::get('address') }}">
								</div>

								<div class="row">
									<div class="col-xl-6">
										<!-- Address Line -->
										<label for="contact_name">Postal Code*</label>
										<input type="text" name="postalCode" id="postalcode" class="contact_input" required="required" value="{{ Session::get('postalCode') }}">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Streetr -->
										<label for="contact_last_name">Address Note </label>
										<input type="text" name="notes" id="note" class="contact_input" value="{{ Session::get('notes') }}">
									</div>
								</div>


								
								
								<button type="submit" class="button contact_button"><span>Save</span></button>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col">
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
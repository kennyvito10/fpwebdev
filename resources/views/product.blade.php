@extends(Session::get('login') ? 'layout/dashboard' : 'layout/header');
@section('container')

<head>
<link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/product.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('styles/product_responsive.css') }}">
</head>

	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" ><img src="{{url('images/categories.jpg')}}" alt="" class="home_background" ></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Smart Phones<span>.</span></div>
								<div class="home_text"><p></p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Product Details -->

	<div class="product_details">
		<div class="container">
			<div class="row details_row">
			@foreach($data as $d)
				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img class="img-fluid" src="{{ url('images/'.$d['imgUrl'].'') }}" alt="" class="details_image_large"><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
					</div>
				</div>
				
				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name">{{$d['productName']}}</div>
						
						<div class="details_price">Rp. {{$d['price']}}</div>
				
						<!-- In Stock -->
						<div class="in_stock_container">
							<div class="availability">Availability:</div>
							<span>In Stock</span>
						</div>
						<div class="details_text">
							<p>{{$d['description']}}</p>
						</div>

						<!-- Product Quantity -->
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>Qty</span>
								<form action="/addcart/{{$d['productid']}}" method="post" >
								@csrf
								
								<input id="quantity_input" name="quantity" type="text" pattern="[0-9]*" value="1">
								<div class="quantity_buttons">
									<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
									<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
								</div>
							</div>
							<button class="buttonn" type="submit">Add To Cart</button>
							</form>
							
						</div>

						
						
					</div>
				</div>
			</div>

			<div class="row description_row">
				<div class="col">
					<div class="description_title_container">
						<div class="description_title">Description</div>
					</div>
					<div class="description_text">
						<p>{{$d['description']}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="products_title">Other Products</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<div class="product_grid">
					@foreach($related_data as $da)
						<!-- Product -->
						<div class="product">
							<div class="product_image"><img src="{{ url('images/'.$da['imgUrl'].'') }}" alt="" style="width:200px;height:200px"></div>
							<div class="product_content">
								<div class="product_title"><a href="/product/{{$da['productid']}}">{{$da['productName']}}</a></div>
								<div class="product_price">Rp. {{$da['price']}}</div>
							</div>
						</div>
					@endforeach


					</div>
				</div>
			</div>
		</div>
	</div>

	
	
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
<script src="{{ url('js/product.js') }}"></script>
@endsection
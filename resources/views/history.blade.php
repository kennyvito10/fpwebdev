@extends('layout/dashboard')

@section('container')

<head>
<link rel="stylesheet" type="text/css" href="{{url('styles/cart.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('styles/cart_responsive.css')}}">
</head>

	
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background"><img src="{{url('images/cart.jpg')}}" alt="" class="home_background"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="{{url('')}}">Home</a></li>
										<li>Shopping Cart</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Product</div>
						<div class="cart_info_col cart_info_col_price">Price</div>
						<div class="cart_info_col cart_info_col_quantity">Quantity</div>
						<div class="cart_info_col cart_info_col_total">Total</div>
					</div>
				</div>
			</div>
			<div class="row cart_items_row">
				<div class="col">

				<?php
					$totalprice = 0;
					$currentbillid = 0;
					?>		
					<?php
						if($countda == 0){


					?>	
					<h1 style="text-align:center; color:black">There are No Items in your Cart</h1>
					<?php

						}else{

						
					?>
					
					

@foreach($da as $d)


				<!-- Cart Item -->
				<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
					<!-- Name -->
					<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
						<div class="cart_item_image">
							<div><img src="{{ url('images/'.$d['imgUrl'].'') }}" alt="" style="width:150px; height:150px;"></div>
						</div>
						<div class="cart_item_name_container">
							<div class="cart_item_name"><a href="/product/{{$d['productid']}}">{{$d['productName']}}</a></div>
						</div>
					</div>

					

					
					<!-- Price -->
					<div class="cart_item_price">Rp. {{$d['price']}}</div>
					<!-- Quantity -->
					<div class="cart_item_quantity">
						<div class="product_quantity_container">
							
								<span style="color:black">{{$d['qty']}}</span>
								
							
						</div>
					</div>
					<!-- Total -->
					<?php
					$subt = $d['price']*$d['qty'];
					$totalprice += $subt;
					$currentbillid = $d['bill_id'];
					?>
					<div class="cart_item_total">Rp. {{$subt}}</div>
				</div>

				
				@endforeach	
<?php
}?>
				
				

				
				
				

				</div>
			</div>
			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button"><a href="{{url('allproducts')}}">Continue shopping</a></div>
						
					</div>
				</div>
			</div>

			

			<div class="row row_extra">
				

				<div class="col-lg-6 offset-lg-2">
					<div class="cart_total">
						<div class="section_title">Cart total</div>
						<div class="section_subtitle">Final info</div>
						<div class="cart_total_container">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Subtotal</div>
									<div class="cart_total_value ml-auto">Rp. {{$totalprice}}</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Shipping</div>
									<div class="cart_total_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_total_title">Total</div>
									<div class="cart_total_value ml-auto">Rp. {{$totalprice}}</div>
								</li>
							</ul>
						</div>
						
					</div>
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
@endsection
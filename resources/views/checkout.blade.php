@extends('layout/dashboard')

@section('container')
<head>

<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
</head>

	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="{{url('/')}}">Home</a></li>
										<li>Checkout</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Checkout -->
	
	<div class="checkout">
		<div class="container">
			<div class="row">

			<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Your order</div>
						<div class="section_subtitle">Order details</div>
						<?php
					$totalprice = 0;
					
					?>	

						<!-- Order details -->
						<div class="order_list_container">
							<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
								<div class="order_list_title"></div>
								<div class="order_list_value ml-auto"></div>
							</div>
							<?php
							if($count != 0 ){
							?>
							@foreach($da as $d)
							
								<?php
					$subt = $d['price']*$d['qty'];
					$totalprice += $subt;
					$currentbillid = $d['bill_id'];
					?>
					@endforeach


					<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Subtotal</div>
									<div class="order_list_value ml-auto">Rp. {{$totalprice}}</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Shipping</div>
									<div class="order_list_value ml-auto">Free</div>
								</li>
								
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Total</div>
									<div class="order_list_value ml-auto">Rp. {{$totalprice}}</div>
								</li>
							</ul>
							
								
						</div>
				</div>
			</div>
			

			<div class="col-lg-6">
					<div class="order checkout_section">
						<div class="section_title">Payment Method</div>
						

						<!-- Payment Options -->
						<div class="payment">
							<div class="payment_options">
								<!-- <label class="payment_option clearfix">Transfer to Virtual Account
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label> -->
								<label class="payment_option clearfix">Cash on Delivery
									<input type="radio" name="radio">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>

						<!-- Order Text -->
						<div class="order_text">*We only Accept Cash On Delivery : <br> Our courier will bring a VISA/MasterCard EDC and you can pay on the spot or apply a 0% Installment</div>
						
							<form method="post" action="updatestatusordered/{{$currentbillid}}" style="display:inline-block">
                                @method('patch')
                                @csrf  
                                <button type="submit" class="buttoon">Order</button></a>
      
                              </form>
						
					</div>
				</div>				
			</div>
			<?php
							}
							else{
							?>
					<p>You have no items to Checkout</p>
					<?php
							}
					?>

		</div>
	</div>



@endsection
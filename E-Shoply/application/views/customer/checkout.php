<section class="order">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 offset-md-1 col-md-10 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
				<div class="card check-c1">
					<div class="card-body check-c1-body">
						<div class="upper-part">
							<p>Your Order</p>
						</div>
						<div class="product">
							<p class="store-name"> Samsung Official Store</p>
							<i class="fas fa-angle-right"></i>
							<a class="float-right" href="#"><i class="far fa-trash-alt"></i></a>
							<div class="product-part">
								<div class="img-text-part d-flex">
									<img class="card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="BRAND" >
									<div class="text-part">
										<p class="product-name">Samsung Galaxy s20 Ultra Smartphone 6.8" -8GB RAM-512GB</p>
										<div class="color-value-part">
											<p class="color">Color: Black</p>
											<div class="count-box">
												<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
												<input type="number" id="number" value="0" />
												<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
											</div>
										</div>
										<p class="price">BDT 80,0000</p>
									</div>
									<div>
									</div>
								</div>
							</div>
						</div>
						<div class="product">
							<p class="store-name"> Samsung Official Store</p>
							<i class="fas fa-angle-right"></i>
							<a class="float-right" href="#"><i class="far fa-trash-alt"></i></a>
							<div class="product-part">
								<div class="img-text-part d-flex">
									<img class="card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="BRAND" >
									<div class="text-part">
										<p class="product-name">Samsung Galaxy s20 Ultra Smartphone 6.8" -8GB RAM-512GB</p>
										<div class="color-value-part">
											<p class="color">Color: Black</p>
											<div class="count-box">
												<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
												<input type="number" id="number" value="0" />
												<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
											</div>
										</div>
										<p class="price">BDT 80,0000</p>
									</div>
									<div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="checkout-info">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 offset-md-1 col-md-10 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
				<div class="card check-c2">
					<div class="card-body check-c2-body">
						<div class="upper-part">
							<p>Checkout Information</p>
						</div>
						<div class="body">
							<label>Phone Number</label>
							<input class="form-control" type="tel" placeholder="Phone Number" id="phone-number" >
							<label>Delivery Address</label>
							<textarea class="form-control" aria-label="With textarea"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="order-summary">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 offset-md-1 col-md-10 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
				<div class="card check-c3">
					<div class="card-body check-c3-body">
						<div class="upper-part">
							<p>Order Summary</p>
						</div>
						<div class="body-part m-auto">
							<div class="calculation-part">
								<div class="subtotal">
									<p>Subtotal</p>
									<p class="price">BDT 1,60,0000</p>
								</div>
								<div class="shipping-cost">
									<p>Shipping Cost</p>
									<p class="price">BDT 60</p>
								</div>
							</div>
							<div class="total">
								<p>Total</p>
								<p class="total-price">BDT 1,60,0060</p>
							</div>
							<button class="btn confirm-btn" type="button" name="button">Confirm Payment</button>
						</div>
						<div class="agree-part text-center">
							<input type="radio" name="agree" value="agree">
							<p class="agree">I agree to the <a href="<?php echo base_url()?>terms-condition">Terms & Conditions</a> and <a href="<?php echo base_url()?>purchasing-policy">Purchasing Policy</a> of E-Shoply</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

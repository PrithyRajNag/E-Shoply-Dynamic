<section class="top">
	<div class="container">
		<div class="row">
			<div class="top-all col-12 offset-sm-3 col-sm-9 offset-md-4 col-md-8 offset-lg-5 col-lg-7 offset-xl-6 col-xl-6">
				<div class="top-side">
					<a class="top-text" href="#">Become a Seller</a>
					<a class="top-text" href="#">Support Center</a>
					<a class="top-text" href="#">Available Now</a>
					<a href="#"><img class="top-img" src="<?php echo base_url()?>assets/pictures/app-store.png" alt="App Store"></a>
					<a href="#"><img class="top-img" src="<?php echo base_url()?>assets/pictures/google-play.png" alt="Google Play"></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="upper-side">
	<div class="container">
		<div class="row">
			<a href="<?php echo base_url()?>"><img class="logo col-5 col-sm-4 col-md-3 col-lg-3 col-xl-3" src="<?php echo base_url()?>assets/pictures/logo.svg" alt="Logo"></a>
			<div class="search input-group col-11 col-sm-11 col-md-12 col-lg-6  col-xl-6">
				<div class="all-dropdown float-right d-inline-block">
					<button class="btn all-dropdown-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						All <i class="fas fa-chevron-down all-down-icon"></i>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Samsung Galaxy M30</a>
						<a class="dropdown-item" href="#">Redmi Note 9</a>
						<a class="dropdown-item" href="#">Realmi 6i</a>
					</div>
				</div>
				<input type="text" class="form-control " placeholder="Search for products">
				<button class="input-group-append btn  search-btn" type="button"><i class="fas fa-search search-icon"></i></button>
			</div>
			<div class="ncfs-btns col-lg-3 col-xl-3 d-flex">
				<div>
					<button class="ncfs-btn btn notify-dropdown-btn" type="button" id="dropdownNotifyButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="notify" src="<?php echo base_url()?>assets/pictures/notify.png" alt="Notification"></button>
					<div class="dropdown-menu notify-dropdown" aria-labelledby="dropdownNotifyButton">
						<div class="upper-part">
							<p>Notifications</p>
							<p class="mark-read float-right">Mark as read</p>
						</div>
						<div class="body">
							<a class="dropdown-item" href="#">
								<div class="card notify-card">
									<div class="card-body notify-card-body">
										<div class="img-text-part d-flex">
											<img class="notify-product-img card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="Product" >
											<div class="text-part">
												<p>Thank you for placing your order to Bashundhara Paper Mills for Eid Dhamaka . Our customer manager will contact you soon.</p>
												<p class="time">29 Feb, 2020</p>
											</div>
										</div>
									</div>
								</div>
							</a>
							<a class="dropdown-item" href="#">
								<div class="card notify-card">
									<div class="card-body notify-card-body">
										<div class="img-text-part d-flex">
											<img class="notify-product-img card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="Product" >
											<div class="text-part">
												<p>Thank you for placing your order to Bashundhara Paper Mills for Eid Dhamaka . Our customer manager will contact you soon.</p>
												<p class="time">29 Feb, 2020</p>
											</div>
										</div>
									</div>
								</div>
							</a>
							<a class="dropdown-item" href="#">
								<div class="card notify-card">
									<div class="card-body notify-card-body">
										<div class="img-text-part d-flex">
											<img class="notify-product-img card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="Product" >
											<div class="text-part">
												<p>Thank you for placing your order to Bashundhara Paper Mills for Eid Dhamaka . Our customer manager will contact you soon.</p>
												<p class="time">29 Feb, 2020</p>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div>
					<button class="ncfs-btn btn cart-dropdown-btn" type="button" id="dropdownCartButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="cart" src="<?php echo base_url()?>assets/pictures/cart.png" alt="Cart"></button>
					<div class="dropdown-menu cart-dropdown" aria-labelledby="dropdownCartButton">
						<div class="upper-part">
							<p>Cart</p>
						</div>
						<div class="body-part">
							<div class="dropdown-item">
								<div class="product">
									<p class="store-name"> Samsung Official Store</p>
									<a href="#"><i class="far fa-trash-alt"></i></a>
									<div class="product-part">
										<div class="img-text-part d-flex">
											<img class="cart-product-img card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="Product" >
											<div class="text-part">
												<p class="product-name">Samsung Galaxy s20 Ultra Smartphone 6.8" -8GB RAM-512GB</p>
												<div class="color-value-part">
													<p>Color: Black</p>
													<div class=count-box>
														<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
														<input type="number" id="number" value="0" />
														<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
													</div>
												</div>
												<p class="price">BDT 80,0000</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdown-item">
								<div class="product">
									<p class="store-name"> Samsung Official Store</p>
									<a href="#"><i class="far fa-trash-alt"></i></a>
									<div class="product-part">
										<div class="img-text-part d-flex">
											<img class="cart-product-img card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="BRAND" >
											<div class="text-part">
												<p class="product-name">Samsung Galaxy s20 Ultra Smartphone 6.8" -8GB RAM-512GB</p>
												<div class="color-value-part">
													<p>Color: Black</p>
													<div class=count-box>
														<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
														<input type="number" id="number" value="0" />
														<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
													</div>
												</div>
												<p class="price">BDT 80,0000</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="down-part">
							<a href="<?php echo base_url()?>customer/checkout"><button class="text-center btn" type="submit">Check out</button></a>
						</div>
						<!-- <div class="empty-cart">
						  <img class="cart-empty" src="<?php echo base_url()?>assets/pictures/cart-empty.png" alt="Empty Cart">
						  <p class="empty text-center">You haven't added anthing to cart</p>
						</div> -->
					</div>
				</div>
				<div>
					<button class="ncfs-btn btn fav-dropdown-btn" type="button" id="dropdownFavButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="fav" src="<?php echo base_url()?>assets/pictures/favourite.png" alt="Favourite"></button>
					<div class="dropdown-menu fav-dropdown" aria-labelledby="dropdownFavButton">
						<div class="upper-part">
							<p>Favourites</p>
						</div>
						<div class="body">
							<a class="dropdown-item" href="#">
								<div class="product">
									<p class="store-name"> Samsung Official Store</p>
									<div class="img-text-part d-flex">
										<img class="fav-product-img card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="Product" >
										<div class="text-part">
											<p class="product-name">Samsung Galaxy s20 Ultra Smartphone 6.8" -8GB RAM-512GB</p>
											<p class="price">BDT 80,0000</p>
										</div>
									</div>
								</div>
							</a>
							<a class="dropdown-item" href="#">
								<div class="product">
									<p class="store-name"> Samsung Official Store</p>
									<div class="img-text-part d-flex">
										<img class="fav-product-img card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="Product" >
										<div class="text-part">
											<p class="product-name">Samsung Galaxy s20 Ultra Smartphone 6.8" -8GB RAM-512GB</p>
											<p class="price">BDT 80,0000</p>
										</div>
									</div>
								</div>
							</a>
							<a class="dropdown-item" href="#">
								<div class="product">
									<p class="store-name"> Samsung Official Store</p>
									<div class="img-text-part d-flex">
										<img class="fav-product-img card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="Product" >
										<div class="text-part">
											<p class="product-name">Samsung Galaxy s20 Ultra Smartphone 6.8" -8GB RAM-512GB</p>
											<p class="price">BDT 80,0000</p>
										</div>
									</div>
								</div>
							</a>
							<a class="dropdown-item" href="#">
								<div class="product">
									<p class="store-name"> Samsung Official Store</p>
									<div class="img-text-part d-flex">
										<img class="fav-product-img card-img-top" src="<?php echo base_url()?>assets/pictures/galaxy-s20-1.jpg" alt="Product" >
										<div class="text-part">
											<p class="product-name">Samsung Galaxy s20 Ultra Smartphone 6.8" -8GB RAM-512GB</p>
											<p class="price">BDT 80,0000</p>
										</div>
									</div>
								</div>
							</a>
						</div> -->
						<!-- <div class="empty-fav">
						  <img class="fav-empty" src="<?php echo base_url()?>assets/pictures/fav-empty.png" alt="Empty Favourite">
						  <p class="empty text-center">You haven't added anything to favourites</p>
						</div> -->
					</div>
				</div>
				<div>
					<button class="ncfs-btn btn profile-dropdown-btn" type="button" id="dropdownProfile Button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="profile" src="<?php echo base_url()?>assets/pictures/sign-in.png" alt="Profile"></button>
					<div class="dropdown-menu profile-dropdown" aria-labelledby="dropdownProfileButton">
						<a href="<?php echo base_url()?>my-profile"><i class="far fa-user"></i>My Profile</a>
						<a href="<?php echo base_url()?>login"><img class="logout" src="<?php echo base_url()?>assets/pictures/logout-icon.png" alt="Logout">Logout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="main-menu">
	<div class="container">
		<div class="row">
			<div class="d-flex menu col-lg-12 col-xl-12">
				<div class="navbar navbar-expand-lg navbar-light">
					<div id="btn" class="navbar-brand bar">
						<div id="top"></div>
						<div id="middle"></div>
						<div id="bottom"></div>
					</div>
				</div>
				<ul>
					<li><a class="active" href="<?php echo base_url()?>">HOME</a></li>
					<li><a href="<?php echo base_url()?>new-products">NEW PRODUCTS</a></li>
					<li><a href="<?php echo base_url()?>campaign">CAMPAIGN</a></li>
					<li><a href="<?php echo base_url()?>brand">BRAND</a></li>
					<li><a href="<?php echo base_url()?>shop">SHOP</a></li>
					<li><a href="<?php echo base_url()?>community">COMMUNITY</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

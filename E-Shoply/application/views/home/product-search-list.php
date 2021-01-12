<section class="brand-selection">
	<div class="container">
		<div class="row psl-brand">
			<div>
				<label class="brand-lbl" for="brand">Brand :</label>
				<ul class="nav nav-tabs brand-tab text-center d-flex" id="brand-tab" role="tablist">

					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="brand1-tab" data-toggle="tab" href="#brand1" role="tab" aria-controls="brand1" aria-selected="true"><img src="<?php echo base_url()?>assets/pictures/bs-1.png" alt="Brand1">
						</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand2-tab" data-toggle="tab" href="#brand2" role="tab" aria-controls="brand2" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-2.png" alt="Brand2"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand3-tab" data-toggle="tab" href="#brand3" role="tab" aria-controls="brand3" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-3.png" alt="Brand3"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand4-tab" data-toggle="tab" href="#brand4" role="tab" aria-controls="brand4" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-4.png" alt="Brand4"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand5-tab" data-toggle="tab" href="#brand5" role="tab" aria-controls="brand5" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-5.png" alt="Brand5"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand6-tab" data-toggle="tab" href="#brand6" role="tab" aria-controls="brand6" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-6.png" alt="Brand6"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand7-tab" data-toggle="tab" href="#brand7" role="tab" aria-controls="brand7" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-7.png" alt="Brand7"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand8-tab" data-toggle="tab" href="#brand8" role="tab" aria-controls="brand8" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-8.png" alt="Brand8"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand9-tab" data-toggle="tab" href="#brand9" role="tab" aria-controls="brand9" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-9.png" alt="Brand9"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand10-tab" data-toggle="tab" href="#brand10" role="tab" aria-controls="brand10" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-10.png" alt="Brand10"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand11-tab" data-toggle="tab" href="#brand11" role="tab" aria-controls="brand11" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-1.png" alt="Brand11"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="brand12-tab" data-toggle="tab" href="#brand12" role="tab" aria-controls="brand12" aria-selected="false"><img src="<?php echo base_url()?>assets/pictures/bs-4.png" alt="Brand12"></a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link others" id="brand13-tab" data-toggle="tab" href="#brand13" role="tab" aria-controls="brand13" aria-selected="false">Others</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="price-range">
				<label for="price-range">Price :</label>
				<input class="text-center min-price" type="number" placeholder="Min" id="min-price" name="min-price">
				<label class="text-center dash" for="range" placeholder="Min"><i class="fas fa-minus"></i></label>
				<input class="text-center max-price" type="number" placeholder="Max" id="max-price" name="max-price">
				<button class="text-center btn" type="submit" placeholder="Max">GO</button>
			</div>
		</div>
		<div class="row">
			<div class="sort-by">
				<label class="sort-by-lbl" for="sort-by">Sort By :</label>
				<div class="sort d-flex">
					<input class="relevance" type="radio" id="relevance" name="search-by" value="relevance">
					<label class="sort-lbl" for="relevance">Relevance</label><br>
					<input type="radio" id="low-to-high" name="search-by" value="low-to-high">
					<label class="sort-lbl" for="low-to-high">Low to high</label><br>
					<input type="radio" id="high-to-low" name="search-by" value="high-to-low">
					<label class="sort-lbl" for="high-to-low">High to low</label>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="brand-tab-content">
	<div class="container">
		<div class="tab-content" id="brand-tab-content">
			<div role="tabpanel" class="tab-pane active" id="brand1">
				<div class="row">
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-2.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-4.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-5.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-6.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-7.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="brand2">
				<div class="row">
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-1.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="brand3">
				<div class="row">
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
						<a href="#">
							<div class="card psl-c4">
								<div class="card-body psl-c4-body">
									<img class="psl-c4-img card-img-top" src="<?php echo base_url()?>assets/pictures/product-3.png" alt="PRODUCT" >
									<p class="psl-c4-text text-center about">Man Stylish Watch</p>
									<p class="psl-c4-text text-center psl-price">BDT. 3,000/-</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
</section>

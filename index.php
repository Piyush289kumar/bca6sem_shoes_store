<?php include ('header.php') ?>
<!-- start banner Area -->
<section class="banner-area">
	<div class="container">
		<div class="row fullscreen align-items-center justify-content-start">
			<div class="col-lg-12">
				<div class="active-banner-slider owl-carousel">
					<!-- single-slide -->
					<div class="row single-slide align-items-center d-flex">
						<div class="col-lg-5 col-md-6">
							<div class="banner-content">
								<h1>Nike New <br>Collection!</h1>
								<p>Elevate Your Style with Our Exclusive Collection
									Welcome to <b>Manas Sneakers, </b>where fashion meets comfort and quality.
									Our meticulously curated collection of shoes is designed to cater to all your
									footwear needs, whether you're looking for the latest trends, timeless classics, or
									everyday essentials..</p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="img/banner/banner-img.png" alt="">
							</div>
						</div>
					</div>
					<!-- single-slide -->
					<div class="row single-slide">
						<div class="col-lg-5">
							<div class="banner-content">
								<h1>Nike New <br>Collection!</h1>
								<p>Elevate Your Style with Our Exclusive Collection
									Welcome to Manas Sneakers, where fashion meets comfort and quality.
									Our meticulously curated collection of shoes is designed to cater to all your
									footwear needs, whether you're looking for the latest trends, timeless classics, or
									everyday essentials..</p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="banner-img">
								<img class="img-fluid" src="img/banner/banner-img.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->
<!-- start features Area -->
<section class="features-area section_gap">
	<div class="container">
		<div class="row features-inner">
			<!-- single features -->
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon1.png" alt="">
					</div>
					<h6>Free Delivery</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon2.png" alt="">
					</div>
					<h6>Return Policy</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon3.png" alt="">
					</div>
					<h6>24/7 Support</h6>
					<p>Free Shipping on all order</p>
				</div>
			</div>
			<!-- single features -->
		</div>
	</div>
</section>
<!-- end features Area -->
<!-- Start category Area -->
<section class="category-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
							<a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Sneaker for Sports</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c2.jpg" alt="">
							<a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Sneaker for Sports</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
							<a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Product for Couple</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
							<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Sneaker for Sports</h6>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-deal">
					<div class="overlay"></div>
					<img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
					<a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
						<div class="deal-details">
							<h6 class="deal-title">Sneaker for Sports</h6>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End category Area -->
<!-- start product Area -->
<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-lg-6 text-center">
			<div class="section-title">
				<h1>Latest Products</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<!-- PHP CODE -->
		<?php
		include ("config.php");
		if (isset($_GET['page_num_index'])) {
			$page_num_index_by_addbar = $_GET['page_num_index'];
		} else {
			$page_num_index_by_addbar = 1;
		}
		$record_limit = 10;
		$offset = ($page_num_index_by_addbar - 1) * $record_limit;
		$sql_show_user = "SELECT * FROM achievement WHERE active_record = 'Yes' ORDER BY aid DESC LIMIT {$offset},{$record_limit}";
		$result_sql_show_user = mysqli_query($conn, $sql_show_user) or die("Query Failed!!");
		if (mysqli_num_rows($result_sql_show_user) > 0) {
			$serial_num = $offset + 1;
			while ($row = mysqli_fetch_assoc($result_sql_show_user)) {
				?>
				<!-- single product -->
				<div class="col-lg-3 col-md-6">
					<div class="single-product">
						<img class="img-fluid" src="admin/upload/<?php echo ($row['aimg']) ?>" alt="Error">
						<div class="product-details">
							<h6><?php echo ($row['atitle']) ?></h6>
							<div class="price">
								<h6>₹ <?php echo ($row['atype']) ?></h6>
							</div>
							<div class="prd-bottom">
								<a href="whatsapp:contact=+918817762774@s.whatsapp.com&message=I'd like to chat with you">
									<img src="img/whatsapppng.png" alt="Whats App" class="whatappIcon">
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- single product -->
			<?php }
		} ?>
	</div>
</div>
</div>
</div>
<!-- End exclusive deal Area -->
<!-- Start brand Area -->
<section class="brand-area section_gap">
	<div class="container">
		<div class="row">
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
			</a>
			<a class="col single-img" href="#">
				<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
			</a>
		</div>
	</div>
</section>
<!-- End brand Area -->
<?php include ('footer.php') ?>
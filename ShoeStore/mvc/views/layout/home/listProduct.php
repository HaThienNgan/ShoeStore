
<section id="product">
		<div class="container">
			<div class="row NewRelease">
				<div class="col-sm-12 NewRelease-content">
					<h2>NEW RELEASE</h2>
				</div>
				<?php foreach ($data['product'] as $value) { ?>
				<div class="col-md-3 sub px-0">
					<div class="dau">
						<a href="<?php echo URL.'layout/detail/'.$value['id']; ?>"><img src="<?php echo URL_LAYOUT.'img/'.$value['img'];?>" alt="" width="300px" height="300px"></a>
						<p class="tensp"><?php echo $value['tensp']; ?></p>
						<p class="gia"><?php echo '$'.$value['gia']; ?></p>
						<a class="addCart" href="<?php echo URL."cart/store/${value['id']}"; ?>" ><button class="btnBuy2" >Add to cart</button></a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="container">
				<div class="row member">
					<div class="col-sm-12 member-title">
						<h2>Member Benifits</h2>
					</div>
					<div class="col-sm-12 member-content">
						<h1>where all athletes belong</h1>
						<p>Things are better as a Svan Member. Get first and exclusive access to the newest styles & innovation, free shipping, birthday rewards and more</p>
						<span><button type="button" href="#">Join us</button></span>
					</div>
				</div>
		</div>
		<div class="container">
					<div class="row benifit">
						<div class=" col-md-4 sub px-0">
							<img src="<?php echo URL_LAYOUT.'img/';?>benifit1.jpg" width="100%">
							<p>Exclusive Svan Shopping Perks</p>
							
						</div>
						<div class=" col-md-4 sub px-0">
							<img src="<?php echo URL_LAYOUT.'img/';?>benifit2.jpg" width="100%">
							<p>First & Exclussive Access</p>

						</div>
						<div class=" col-md-4 sub px-0">
							<img src="<?php echo URL_LAYOUT.'img/';?>benifit3.jpg" width="100%">
							<p>Member Rewards & Offers</p>
							
						</div>
					</div>
		</div>
</section>

<header>
		<section id="head" >
			<!-- Pre-header --> 
			<div class="row pre-header">
				<div class="col-sm-8">
				</div>
				<div class="col-sm-4 help">
					<a href="#"><span>Help</span></a>
					<span>|</span>
					<a href="<?php echo URL.'cart/mybill'; ?>"><span>Đơn hàng</span></a>
					<span>|</span>
					<a href="<?php echo URL.'login'; ?>" id="login1">
						<?php if(isset($_SESSION['user']['username'])){
								echo $_SESSION['user']['username'];
								} 
								else
									echo 'Login';
						?>
					</a>
					<span>|</span>
					<a href="<?php echo URL.'login/logout'; ?>" id="login1">
						<?php if(isset($_SESSION['user']['username'])){
								echo 'Logout';
								} 
								
						?>
					</a>
				</div>
			</div>

			<!-- Header-menu -->
			
			<div class="row head ">
				<div class="col-xl-2 logo">
					<img src="<?php echo URL_LAYOUT.'img/';?>logo.png" width="200px">
				</div>
				<div class="col-xl-7 menu">
					<nav class="navbar navbar-expand-md bg-dark navbar-dark">
 						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="background:#2d3436">
    						<span class="navbar-toggler-icon" ></span>
  						</button>
	  					<div class="collapse navbar-collapse" id="collapsibleNavbar">
	    					<ul class="navbar-nav nav-menu" style="justify-content: space-around; width: 100%">
	      						<li class="nav-item" >
	        						<a class="nav-link active" href="<?php echo URL; ?>" style="color: #000">Home</a>
	     						</li>
	      						<li class="nav-item">
	        						<a class="nav-link" href="#" style="color: #000">Giày nam</a>
	      						</li>
	      						<li class="nav-item">
	        						<a class="nav-link" href="#" style="color: #000">Giày nữ</a>
	      						</li>
	      						<li class="nav-item">
	        						<a class="nav-link" href="#" style="color: #000">Trẻ em</a>
	      						</li>
	      						<li class="nav-item">
	        						<a class="nav-link" href="#" style="color: #000">Blog</a>
	      						</li>
	      						<li class="nav-item">
	        						<a class="nav-link" href="#" style="color: #000">Về chúng tôi</a>
	      						</li>
	    					</ul>
	  					</div>  
					</nav>
				</div>
				
				<div class="col-xl-2 search">
					<!-- Actual search box -->
					<div class="form-group has-search">
					    <span class="fa fa-search form-control-feedback"></span>
					    <input type="text" class="form-control" placeholder="Search">
					</div>
				</div>
				<div class="col-xl-1 cart-heart">
					<div class="cart-heart-child">
						<a href="<?php echo URL.'cart/index'; ?>" class="fa fa-shopping-cart">
								<span id="num_cart_par">
									<?php 
										if(isset($_SESSION['cart']))
										{
											echo '('.count($_SESSION['cart']).')';
										}
									 ?>
								</span>
						</a>
						<a href="#" class="fa fa-heart"></a>
					</div>
					
				</div>
			</div>
					<div class="sale">
				<div class="container">
					<div id="demo" class="carousel slide" data-ride="carousel">
  					<!-- The slideshow -->
  						<div class="carousel-inner">
    						<div class="carousel-item active">
      							<p>Free shipping & 60days free returns</p>
      							<a href="#">Join now</a>
    						</div>
    						<div class="carousel-item">
      							<p>Save up to 40%</p>
      							<a href="#">Shop all our new markdowns</a>
    						</div>
  						</div>
					</div>
				</div>
			</div>
		</section>

	</header>

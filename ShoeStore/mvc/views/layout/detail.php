<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@200&family=Orelega+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT; ?>css/detail.css">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT.'css/header.css'; ?>">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT.'css/footer.css'; ?>">
</head>
<body>
	<!-- header -->
	<?php require('home/header.php'); ?>
	<!-- header -->


		<section id="product">
			<div class="container">
				<p></p><br>
				<div class="row">
					<div class="col-lg-7 ">
						<img src="<?php echo URL_LAYOUT.'img/'.$data['product']['img']; ?>" width="500px" height="500px">
					</div>
					<div class="col-lg-5  ">
						<h3><?php echo $data['product']['tensp'] ;?></h3>
						<p><?php  echo $data['product']['info'] ;?></p> <br>
						<h5>Select Size </h5>
						<span>37</span>
						<span>38</span>
						<span>39</span>
						<span>40</span>	<br> <br>

						<a href="<?php echo URL.'cart/store/'.$data['product']['id']; ?>">Add to cart</a>
						<a href="#">Buy now</a>
						<div class="detail">
							<h6>Detail</h6>
							<p><?php echo $data['product']['des'] ;?></p>
						</div>
					</div>

				</div>
				<div class="comment">
					<p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Veniam quis impedit ea id maxime laboriosam voluptates, nisi neque quam error inventore iure sequi, quidem non vero repudiandae natus sint magni!</p>
				</div>
			</div>
		</section>
	<!-- footer -->
	<?php require('home/footer.php'); ?>
	<!-- footer -->

		
</body>
</html>
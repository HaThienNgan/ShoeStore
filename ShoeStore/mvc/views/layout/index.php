
<!DOCTYPE html>
<html>
<head>

	<title>SVAN. JUST DO IT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
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
  <link rel="stylesheet"  href="<?php echo URL_LAYOUT.'css/style.css'; ?>">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT.'css/header.css'; ?>">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT.'css/footer.css'; ?>">
  <style>
  	
  </style>
<body>
	<!-- Header -->
	<?php require_once 'home/header.php'; ?>
	<!-- Header -->
	<section id="banner">
			<div class=" row banner">
				<div class=" big-banner ">
					<img src="<?php echo URL_LAYOUT.'img/';?>nike-just-do-it.jpg">
				</div>
				<div class="container banner-button">
						<h1>COSMIC UNITY'RAW</h1>
						<p>A baseketball shoe made of at least 25% recyled material by weight.</p>
						<span><button type="button" href="#">Shop</button>
						<span><button type="button" href="#">Explore</button></span>
					</div>
			</div>
		</section>
	<main>
		<!-- List product -->
		<?php require_once 'home/listProduct.php'; ?>

			
			
		
		
	</main>
	
	
	<!-- footer -->
	<?php require_once 'home/footer.php'; ?>
	<!-- footer -->

	<!-- javascript -->
	<?php require_once 'home/js.php'; ?>
	<!-- javascript -->

</body>
</html>
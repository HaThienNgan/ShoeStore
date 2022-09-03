<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<meta charset="utf-8">
	
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
  <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT; ?>css/cart.css">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT.'css/header.css'; ?>">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT.'css/footer.css'; ?>">
</head>
<body>
	<!-- header -->
	<?php require_once 'home/header.php'; ?>
	<!-- header -->


	<section id="cart" class="shopping-cart">
		<div class="container">
			<p></p><br>
			<div class="row">
				<div class="col-lg-12">
					<div class="shopping-cart-table">
						<table style="width: 100%">
							<thead>
								<th >Products</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
							</thead>
							<tbody>

							<?php 
								foreach ($data['cart'] as $value) {
							 ?>

								<tr id="<?php echo "product".$value['id']; ?>">
									<td class="shopping-cart-img"><a href="<?php echo URL.'layout/detail/'.$value['id']; ?>"><img src="<?php echo URL_LAYOUT.'img/'.$value['img']; ?>" width="250px"></a></td>
									<td class="shopping-cart-price"><b><?php echo $value['gia']; ?></b></td>
									<td class="shopping-cart-quantity">
										<input type="text" value="<?php echo $value['count']; ?>" id="<?php echo "input".$value['id']; ?>" data-id="<?php echo $value['id']; ?>">
									</td>
								
									<td class="shopping-cart-total">
										<span id="<?php echo "subTotal".$value['id']; ?>"><b id="<?php echo "total".$value['id']; ?>"><?php echo $value['gia']*$value['count']; ?></b></span>
									</td>
									<td class="shoping__cart__item__close">
                                        <a class="removeCart" href="<?php echo URL.'cart/delete/'.$value['id'];?>"  data-id="<?php echo $value['id'];?>">
                                        	<span class="icon_close" style="color: #000">X</span>
                                        </a>
                                	</td>
                                	<td>
                                		<a class="updateBtn" href="<?php echo URL."cart/update/${value['id']}";?>" data-id="<?php echo $value['id']; ?>">UPDATE</a>
                                	</td>
                            	</tr>

							<?php } ?>
							</tbody>

						</table>
					</div>
				</div>
			</div>

			<div class="row">
				<p></p><br>
				<div class="col-lg-6">
					
				</div>
				<div class="col-lg-6 total" >
					<div class="">
						<span><b>TOTAL</b></span>
						<span id="cart_total"><b id="Cart_total">
						<?php 
							$tong=0;
							foreach ($data['cart'] as $value) {
								$tong+=$value['gia']*$value['count'];
							}
							echo $tong.'$';
							$_SESSION['total']=$tong;
						 ?>
						</b></span> <br>
						<a href="<?php echo URL.'cart/checkout'; ?>"><button>CHECK OUT</button></a>
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php require_once('home/footer.php'); ?>
	<!-- footer -->

	<!-- javascript -->
	<?php require_once('home/js.php'); ?>
	<!-- javascript -->

	</body>

</html>
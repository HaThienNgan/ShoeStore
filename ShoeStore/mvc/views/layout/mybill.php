<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Check out</title>
</head>
<body>
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT;?>css/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT;?>css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT;?>css/mybill.css">

</head>
<body>
	<!-- header -->
	<?php require_once('home/header.php'); ?>
	<!-- header -->


	<div id="banner">
		<div class="banner-image">
			
		</div>
		<div class="banner-text">
			<h1>My bills</h1>
		</div>
	</div>
	<section id="checkout">

		<div class="container">
			<h2>Đơn hàng của bạn</h2>
			        <hr>
			<div class="row">
				<?php 
				$dem=1;
				foreach ($data['bill'] as $value) {
					    	?>
				<div class="col-sm-12 detail">
					<h2>Đơn hàng <?php echo $dem; ?></h2> <hr>
					<div class="product-bill-detail">
					    <table>
					    	<tr>
					    		<th>Thông tin đơn hàng</th>
					    	</tr>
					    	<tr>
					    		<td>Ngày đặt hàng</td>
					    		<td><?php echo $value['date']; ?></td>
					    	</tr>
					    	
					    	<tr>
					    		<td>Tiền ship</td>
					    		<td>30000</td>
					    	</tr>
							<tr>
					    		<td>Đơn vị vận chuyển</td>
					    		<td><?php echo $value['dvvc']; ?></td>
					    	</tr>
					    	<tr>
					    		<th>Tổng tiền</th>
					    		<th><?php echo $value['total']; ?></th>
					    	</tr>
					    </table>
					</div>
					<hr>
					<div class="product-cus-detail">
						<table>
							<tr>
					    		<th>Thông tin khách hàng</th>
					    	</tr>

					    	<tr>
					    		<td>Họ và tên</td>
					    		<td><?php echo $value['hoten']; ?></td>
					    	</tr>
					    	<tr>
					    		<td>Địa chỉ</td>
					    		<td><?php echo $value['diachi']; ?></td>
					    	</tr>
					    	<tr>
					    		<td>Số điện thoại</td>
					    		<td><?php echo $value['sdt']; ?></td>
					    	</tr>
					    	<tr>
					    		<td>Email</td>
					    		<td><?php echo $value['email']; ?></td>
					    	</tr>
					    	<tr>
					    		<td>Ghi chú</td>
					    		<td><?php echo $value['ghichu']; ?></td>
					    	</tr>	
						</table>
					</div>

				</div>

				<?php $dem=$dem+1; }; ?>

			</div>
		</div>
	</section>

	<!-- footer -->
		<?php require_once('home/footer.php'); ?>
	<!-- footer -->

	</body>
</html>
</body>
</html>
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
	<script src="https://smtpjs.com/v3/smtp.js">
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="<?php 	echo URL_LAYOUT.'css/checkout.css'; ?>">	
	<link rel="stylesheet" href="<?php echo URL_LAYOUT.'css/header.css'; ?>">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT.'css/footer.css'; ?>">

</head>
<body>
	<!-- header -->
	<?php require_once 'home/header.php'; ?>
	<!-- header -->
	<div id="banner">
		<div class="banner-image">
		</div>
		<div class="banner-text">
			<h1>CHECK OUT</h1>
		</div>
	</div>
	<section id="checkout">

		<div class="container">
			<h2>Chi tiết đơn hàng</h2>
			<hr>
				<div class="row">
					<div class="col-sm-4 detail">
						<h2>Chi tiết hóa đơn</h2> <hr>
							<div class="product-price-title">
							    <table>
							    	<tr>
							    		<th>Product</th>
							    		<th>Price</th>
							    	</tr>
							    	<?php foreach ($data['product'] as $value) {
							    	 ?>
							    	<tr>
							    		<td><?php echo $value['tensp'].'('.$value['count'].')';?></td>
							    		<td><?php echo $value['gia']*$value['count']; ?></td>
							    	</tr>
							    	<?php } ?>
							    	<tr>
							    		<td>Tiền ship</td>
							    		<td>30000</td>
							    	</tr>
							    	
							    </table>
								
							</div>
							<hr>

							<div class="product-price-total">
								<table>
									<tr>
							    		<th>Tổng tiền</th>
							    		<th><?php 
							    		$tong=0;
							    		foreach ($data['product'] as $value) {
							    		 	$tong+=$value['gia']*$value['count'];

							    		 }
							    		 $tong+=30000;
							    		 echo $tong; 
							    		 ?></th>
							    	</tr>
								</table>
							</div>
							<br>
					</div>	
					<div class="col-sm-8 customer">
						<form role="form" method="post">
					        <div class="customer-info">
					        	<p>Họ và tên</p>
					            <input type="text" name="hoten" value="<?php echo $data['user']['hoten']; ?>"><br> <br>
					            <p>Địa chỉ</p>
					            <input type="text" name="diachi" value="<?php echo $data['user']['diachi']; ?>" ><br> <br>
					            <p>Số điện thoại</p>
					            <input type="text" name="sdt" value="<?php echo $data['user']['sdt']; ?>"><br> <br>
					            <p>Địa chỉ email</p>
					            <input type="email" name="email" id="emailCus" value="<?php echo $data['user']['username']; ?>"><br> <br>
								<p>Ghi chú</p>
					            <input type="text" name="ghichu"><br> <br>
					        </div>
					        <div class="vanchuyen">
					        	<p>Chọn đơn vị vận chuyển</p>
					            <input type="radio" id="vt" name="dvvc" value="viettel" checked="checked">
					            <label for="viettel" >Viettel Post</label><br>
					            <input type="radio" id="ghn" name="dvvc" value="giao hàng nhanh">
					            <label for="ghn">Giao hàng nhanh</label><br>
					            <input type="radio" id="ghtk" name="dvvc" value="giao hàng tiết kiệm">
					            <label for="ghtk">Giao hàng tiết kiệm</label>
					        </div>
					        <div class="col-sm-12 btn-checkout">
								<button class="dathang" type="submit" value="Đặt hàng" name="datHang">Đặt hàng</button>
							</div>
						</form>     
					</div>
				</div>
		</div>
	</section>
	<!-- footer -->
	<?php require_once('home/footer.php'); ?>
	<!-- footer -->

	<script>
		/*$('a.dathang').click(function(){
			var emailCus=$('input#emailCus').val();
			Email.send({
			    SecureToken : "c6648041-eb60-4a3a-b01c-0935bc91a8c1",
			    To : emailCus,
			    From : "shopsvan.com@gmail.com",
			    Subject : "Xác nhận đơn hàng",
			    Body : "Đặt hàng thành công! Cảm ơn quý khách!"
			}).then(
			  	message => alert(message)
			);
		});*/
		
	</script>
</html>
</body>
</html>
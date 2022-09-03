<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SVAN SIGN IN</title>
	<style type="text/css">
		body{
			background: #f6f1eb;

		}
		.pre-header{
			width: 100%;
			background: #f6f1eb;
			padding: 10px 0;
			margin-right: auto;
			margin-left: auto;
		}
		.pre-header a{
			color: black;
		}
		.pre-header a:hover{
			color: #666666;
			text-decoration: none;
		}
		.pre-header .help{
			text-align: right;
		}
		a{
			color: black;
			text-decoration: none;
			font-size: 12px;
			padding:5px 10px;
		}
		a:hover{
			color:#666666;
			text-decoration: none;
		}
		.container{
			position: absolute;
			width: 400px;
			height: 500px;
			text-align: center;
			align-items: center;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			background:#fff;
			border-radius: 16px;
		}
		.container h3{
			font-family: Antonio;
			font-size: 35px;
		}
		form{
			padding: 20px 20px;

		}
		input{
			border-color:#cccccc;
			border-radius: 16px;
			font-size: 20px;
		}
		input:hover{
			border-radius: 16px;

		}

		input[type='text']{
			padding: 20px 50px;
			margin-bottom: 10px;
		}
		input[type='password']{
			padding: 20px 50px;
			margin-bottom: 10px;
		}
		input[type='submit']{
			padding: 20px 80px;
			border: none;
			border-style: none;
			background: #b89161;


		}
		input[type='submit']:hover{
			border-color : #fff;
			background: #dfceb9;
			transition: .5s;

		}
		.container p{
			width: 100%;
			height: 1px;
			background:#463520;
		}
	</style>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@200&display=swap" rel="stylesheet">
	
</head>
<body>
	<header>
		<section id="head">
			<!-- Pre-header --> 
			<div class="row pre-header">
				<div class="col-sm-9">
				</div>
				<div class="col-sm-3 help">
					<a href="#"><span>Help</span></a>
					<span>|</span>
					<a href="#"><span>Join Us</span></a>
					<span>|</span>
					<a href="#"><span>Sign in</span></a>
				</div>
			</div>

			<!-- Header-menu -->
			
			<div class="row head ">
				<div class="col-xl-3 logo">
					<img src="<?php echo URL_LAYOUT.'img/'?>logo.png" width="200px">
				</div>
			</div>
	</header>
	<div class="container">
		<h3>Sign In</h3>
		<p><?php 
          if(isset($_SESSION['thongbao']))
          {
            echo $_SESSION['thongbao'];
            unset($_SESSION['thongbao']);
          }
        ?></p>
		<form  method="post">
			<input type="text" name="username" placeholder="Nhập địa chỉ Email"> <br>
			<input type="password" name="password" placeholder="Nhập password"> <br>
			<input type="submit" name="login" value="Đăng nhập">
			<br>

		</form>
		<a href="#">Forgot your password</a>
			<br>
		<p></p> <br>
		<span>Don't have an account?</span><a href="#">Registration</a>
	</div>
</body>
</html>
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
			width: 700px;
			height: 90vh;
			/*text-align: center;*/
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
			text-align: center;

		}
		form{
			position: absolute;
			padding: 20px 20px;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);

		}
		input{
			border-color:#cccccc;
			font-size: 20px;
		}
		
		input[type='email']{
			border-radius: 16px;
			padding: 10px 50px;
			margin-bottom: 10px;
		}
		input[type='text']{
			border-radius: 16px;
			padding: 10px 50px;
			margin-bottom: 10px;
		}
		input[type='password']{
			border-radius: 16px;
			padding: 10px 50px;
			margin-bottom: 10px;
		}
		button{
			padding: 10px 80px;
			border: none;
			border-style: none;
			background: #b89161;
			width: 93%;
			margin-top: 10px;
		}
		button:hover{
			border-color : #fff;
			background: #dfceb9;
			transition: .5s;


		}
		.container p{
			width: 100%;
			height: 1px;
			background:#463520;
		}
		label{
			font-size: 20px;
			

		}
		::placeholder {
			font-size: 15px;
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
					<img src="<?php echo URL_LAYOUT.'img/logo.png' ?>" width="200px">
				</div>
			</div>
	</header>
	<div class="container">
		<h3>Sign Up</h3>
		<form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="nguyenvana@gmail.com" name="username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Họ và tên</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nguyễn Văn A" name="hoten">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Số điện thoại</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="0123456789" name="sdt">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ktx khu A - ĐHQG" name="diachi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">IMG</label>
                    <input type="file" name="img" id="exampleInputEmail1">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" value="Add User" class="btn btn-primary" name="addUser">Đăng kí</button>
                </div>
              </form>
	</div>
</body>
</html>
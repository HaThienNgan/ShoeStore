<?php 
	/**
	 * 
	 */
	class LoginController extends Connect
	{
		private $userModel;
		
		function __construct()
		{
			$this->call_models('UserModel');
			$this->userModel=new UserModel;
		}
		function index()
		{
			if(!isset($_SESSION['username']))
			{

				$data=[];
				$this->call_views('layout/login/login',$data);

			}
			else
				header("location: ".URL);
			if(isset($_POST['login']))
			{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$data['user']=$this->userModel->login($username, $password);
				if(empty($data['user']) )
				{
					$_SESSION['thongbao']="Vui long nhap dung username va password";
				}
				else
				{
					$_SESSION['user']=$data['user'];
					if($data['user']['level']==1)
						header("location:".URL_admin);
					else header("location: ".URL);

					
				}
			}
		
		}
		function logout()
		{
			unset($_SESSION['user']);
			Header("Location: ".URL.'login');

		}
	}
 ?>
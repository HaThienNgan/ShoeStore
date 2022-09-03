<?php 
	/**
	 * 
	 */
	class UserController extends Connect
	{
		private $userModel;
		function __construct()
		{
			$this->call_models('UserModel');
			$this->userModel=new UserModel();
		}
		function index()
		{
			if(isset($_SESSION['user']))
			{
				if($_SESSION['user']['level']==1)
				{
					$data['user']=$this->userModel->getAll();
					$data['main']='user/index';
					$this->call_views('admin/index',$data);
					
				}
			}
			else
			{
				Header("Location:".URL.'login');
			}
			
		}
		function store()
		{
			if(isset($_SESSION['user']))
			{
				if($_SESSION['user']['level']==1)
				{
					if(isset($_POST['addUser'])){
						
						$user=[
							'username'=>$_POST['username'],
							'password'=>$_POST['password'],
							'level'=>$_POST['level'],
							'hoten'=>$_POST['hoten'],
							'sdt'=>$_POST['sdt'],
							'diachi'=>$_POST['diachi'],
							'img'=>$_POST['img']
						];
						$this->userModel->store($user);

						$data['user']=$this->userModel->getAll(['*'],[]);
						$data['main']='user/index';
						$this->call_views('admin/index', $data);
					}
					$data['main']='user/add';
					$this->call_views('admin/index', $data);
				}
				else
				{
					Header("Location:".URL.'login');
				}
			}
		}
		function storeForCus()
		{
				
			if(isset($_POST['addUser'])){
				$_SESSION['user']['username']=$_POST['username'];
				$user=[
					'username'=>$_POST['username'],
					'password'=>$_POST['password'],
					'level'=>0,
					'hoten'=>$_POST['hoten'],
					'sdt'=>$_POST['sdt'],
					'diachi'=>$_POST['diachi'],
					'img'=>$_POST['img']
					];
					$this->userModel->store($user);
					echo "<script>alert('Đăng kí thành công')</script>";
					header("location:".URL);
				}
				$data=[];
				$this->call_views('layout/signup',$data);
		}
		function edit($id)
		{
			if(isset($_SESSION['user']))
			{
				if($_SESSION['user']['level']==1)
				{
					if(isset($_POST['editUser']))
					{
						$user=[
							'username'=>$_POST['username'],
							'password'=>$_POST['password'],
							'level'=>$_POST['level']
						];
						$this->userModel->update($id,$user);
						$data['user']=$this->userModel->getAll(['*'],[]);
						$data['main']='user/index';
						$this->call_views('admin/index',$data);
					}
					$data['user']=$this->userModel->findById($id);
					$data['main']='user/edit';
					$this->call_views('admin/index', $data);
				}
			}
			else
			{
				Header("Location:".URL.'login');
			}
			
		}
		function delete($id)
		{
			if(isset($_SESSION['user']))
			{
				if($_SESSION['user']['level']==1)
				{
					$this->userModel->destroy($id);
					$data['user']=$this->userModel->getAll(['*'],[]);
					$data['main']='user/index';
					$this->call_views('admin/index', $data);
				}
			}
			else
			{
				Header("Location:".URL.'login');
			}
			
		}
	}
 ?>
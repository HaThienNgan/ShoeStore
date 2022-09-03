<?php 
	/**
	 * 
	 */
	class AdminController extends Connect
	{
		
		function __construct()
		{
			
		}
		function index(){
			if(isset($_SESSION['user'])){
				if($_SESSION['user']['level']==1)
				{
					$data['main']='home/main';
					$this->call_views('admin/index', $data);
				}
				else
					header("location:".URL.'login');
			}
			else{
				header("location:".URL.'login');
			}
			
			
		}
		
	}
 ?>
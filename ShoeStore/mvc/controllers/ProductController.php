<?php 
	/**
	 * 
	 */
	class ProductController extends Connect
	{
		private $productModel;
		function __construct()
		{
			$this->call_models('ProductModel');
			$this->productModel=new ProductModel();
		}
		function index()
		{
			if(isset($_SESSION['user']))
			{
				if($_SESSION['user']['level']==1)
				{
					$data['product']=$this->productModel->getAll();
					$data['main']='product/index';
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
					if(isset($_POST['addProduct']))
					{
						$product=[
							'tensp'=>$_POST['tensp'],
							'gia'=>$_POST['gia'],
							'xuatxu'=>$_POST['xuatxu'],
							'soluong'=>$_POST['soluong'],
							'info'=>$_POST['info'],
							'des'=>$_POST['des'],
							'weight'=>$_POST['weight'],
							'img'=>$_POST['img'],
						];
						$this->productModel->store($product);
						$data['product']=$this->productModel->getAll(['*'],[]);
						$data['main']='product/index';
						$this->call_views('admin/index',$data);
				
					}
					$data['main']='product/add';
					$this->call_views('admin/index', $data);
				}
			}
			else
			{
				Header("Location:".URL.'login');
			}
			
		}
		function edit($id)
		{
			if(isset($_SESSION['user']))
			{
				if($_SESSION['user']['level']==1)
				{
					if(isset($_POST['editProduct']))
					{
				
						$product=[
							'tensp'=>$_POST['tensp'],
							'gia'=>$_POST['gia'],
							'xuatxu'=>$_POST['xuatxu'],
							'soluong'=>$_POST['soluong'],
							'info'=>$_POST['info'],
							'des'=>$_POST['des'],
							'weight'=>$_POST['weight']
						];
						$this->productModel->update($id,$product);
						$data['product']=$this->productModel->getAll(['*'],[]);
						$data['main']='product/index';
						$this->call_views('admin/index', $data);
					}
					$data['product']=$this->productModel->findById($id);
					$data['main']='product/edit';
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
					$this->productModel->destroy($id);
					$data['product']=$this->productModel->getAll(['*'],[]);
					$data['main']='product/index';
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
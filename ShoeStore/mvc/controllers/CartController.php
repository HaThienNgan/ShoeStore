<?php 
	/**
	 * 
	 */
	class CartController extends Connect
	{
		private $productModel;
		private $userModel;
		private $billModel;
		private $billDetailModel;
		function __construct()
		{
			$this->call_models('ProductModel');
			$this->productModel=new ProductModel();
			$this->call_models('UserModel');
			$this->userModel=new UserModel();
			$this->call_models('BillModel');
			$this->billModel=new BillModel();
			$this->call_models('BillDetailModel');
			$this->billDetailModel= new BillDetailModel();
		}

		function index()
		{
			/*unset($_SESSION['cart']);
			die();*/
			$data['cart']=[];
           if(isset($_SESSION['cart']))
           {
                $data['cart']=$_SESSION['cart'];
           }
			$this->call_views('layout/cart',$data);
		}
		function store($id){
			if(empty($_SESSION['cart'])|| !array_key_exists($id,$_SESSION['cart']))
			{
				$product=$this->productModel->findById($id);
				$product['count']=1;
				$_SESSION['cart'][$id]=$product;
			}
			else{
				$_SESSION['cart'][$id]['count']=$_SESSION['cart'][$id]['count']+1;
			}
			
			header("location:".URL."cart/index");
		}
		function delete($id)
		{
			unset($_SESSION['cart'][$id]);
			header("location:".URL."cart/index");
		}
		function update($id)
		{
			$val=$_POST['value'];
			$_SESSION['cart'][$id]['count']=$val;
			echo "update thành công";
		}
		function checkout()
		{
			if(!isset($_SESSION['user']['username']))
			{
				header("location:".URL.'login');
			}
			else
			{
				$data['user']=$this->userModel->findByEmail($_SESSION['user']['username']);
				$data['product']=$_SESSION['cart'];
				if(isset($_POST['datHang']))
				{

						/*Thêm bill*/
						$bill=[
							'hoten' =>$_POST['hoten'],
							'diachi'=>$_POST['diachi'],
							'sdt'=>$_POST['sdt'],
							'email'=>$_POST['email'],
							'ghichu'=>$_POST['ghichu'],
							'dvvc'=>$_POST['dvvc'],
							'id_cus'=>$data['user']['id'],
							'total'=>$_SESSION['total']+30000,
							'date'=>date("Y-m-d"),
						];
						$this->billModel->store($bill);
						/*Thêm chi tiết hóa đơn*/
						$BILL=$this->billModel->findByFlat();
						foreach ($_SESSION['cart'] as $value) {
							$detail=[
								'id_sp'=>$value['id'],
								'tensp'=>$value['tensp'],
								'giasp'=>$value['gia'],
								'id_hoadon'=>$BILL['id'],
								'soluong'=>$value['count'],
								'thanhtien'=>($value['count']*$value['gia'])
							];
							$this->billDetailModel->store($detail);
						}
						$BILL['flat']=1;
						$this->billModel->update($BILL['id'],$BILL);
						/*Xóa giỏ hàng*/
						unset($_SESSION['cart']);
						header("location:".URL.'cart/mybill');
				}
				else{
					
					$this->call_views('layout/checkout',$data);
				}
			}
		}
		function myBill()
		{

			$data['bill']=$this->billModel->findByEmail($_SESSION['user']['username']);
			
			$this->call_views('layout/mybill',$data);
		}
	}	
	
 ?>
<?php 
	/**
	 * 
	 */
	class BillDetailController extends Connect
	{
		private $billDetailModel;
		function __construct()
		{
			$this->call_models('BillDetailModel');
			$this->billDetailModel=new BillDetailModel;
		}
		function index($id)
		{
			$data['cthd']=$this->billDetailModel->findByIdFk($id);
			$data['main']='bill/billDetail';
			$this->call_views('admin/index',$data);
		}
		
	}
 ?>
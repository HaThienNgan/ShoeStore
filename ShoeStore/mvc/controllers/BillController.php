<?php 
	/**
	 * 
	 */
	class BillController extends Connect
	{
		private $billModel;
		function __construct()
		{
			$this->call_models('BillModel');
			$this->billModel=new BillModel();
		}
		function index()
		{
			$data['hoadon']=$this->billModel->getAll(['*'],[]);
			$data['main']='bill/index';
			$this->call_views('admin/index', $data);
		}
		function delete($id)
		{
			$this->billModel->destroy($id);
			$data['hoadon']=$this->billModel->getAll(['*'],[]);
			$data['main']='bill/index';
			$this->call_views('admin/index',$data);
		}
	}
 ?>
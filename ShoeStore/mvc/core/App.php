<?php 
	session_start();
	/**
	 * 
	 */
	class App
	{
		protected $controllers='LayoutController';
		protected $actions='index';
		protected $params=[];
		function __construct()
		{
			if(isset($_GET['url'])){
				$url=$_GET['url'];
				$url=trim($url); // cắt kí tự dầu đuôi nếu rỗng
				$url=explode('/', $url);
			}

			if(isset($url[0])){
				$url1=ucfirst($url[0]);
				if(file_exists('./mvc/controllers/'.$url1.'Controller.php')){
					
					$this->controllers=$url1.'Controller';
					unset($url[0]);


				}
				
			}
			
			require_once('./mvc/controllers/'.$this->controllers.'.php');

			$this->controllers=new $this->controllers();

			if(isset($url[1])){
				
				if(method_exists($this->controllers, $url[1])){
					$this->actions=$url[1];
					unset($url[1]);
				}
				
			}
			if(isset($url))
			{
				$this->params=$url ? array_values($url):[];
			}
			call_user_func_array([$this->controllers, $this->actions], $this->params);
		}

	}
 ?>
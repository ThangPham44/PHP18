<?php  
	include_once('models/Product.php');
	class procductController{

		var $model;

		function __construct(){
			$this->model=new product;
		}

		public function list(){
		
			$data=$this->model->getAll();
			include_once('views/product/list.php');
		}
		public function detail(){
			
			$code=$_GET['code'];
			$product=$this->model->find($code);
			include_once('views/product/detail.php');

		}
		public function add(){
			include_once('views/product/add.php');
		}
		public function process(){
			$data = $_POST;
		
		    $status = $this->model->insert($data);

		    if ($status==true) {
		    	setcookie('msg','Thêm mới thành công!',time()+10);
		    	header('Location:?mod=product&act=list');
		    }else{
		    	setcookie('msg','Thêm mới thấy bại!',time()+10);
		    	header('Location:?mod=product&act=add');
		    }

			
		}
		public function edit(){
			
			$code=$_GET['code'];
			$row=$this->model->find($code);
			include_once('views/product/edit.php');

		}
		public function update(){
			$data = $_POST;
			
		    $status = $this->model->update($data);

		    if ($status==true) {
		    	setcookie('msg','update thành công!',time()+10);
		    	header('Location:?mod=product&act=list');
		    }else{
		    	setcookie('msg','update thấy bại!',time()+10);
		    	//header('Location:?mod=product&act=add');
		    }

			
		}
		public function delete(){
			
			$code=$_GET['code'];
			$status=$this->model->delete($code);
			  if ($status==true) {
		    	setcookie('msg','xóa thành công!',time()+10);
		    	header('Location:?mod=product&act=list');
		    }else{
		    	setcookie('msg','xóa thấy bại!',time()+10);
		    	header('Location:?mod=product&act=add');
		    }
	
		}


	}
 ?>
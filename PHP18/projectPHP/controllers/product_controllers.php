<?php  
	include_once('models/products/Product.php');
	 include_once('models/products/category.php');
	class procductcontroller{

		var $model;

		function __construct(){
			$this->model=new product;
		}

		public function list(){
			// lít product
			$data=$this->model->getAll();
				// lấy thông itn category
			$p_models=new category();
			foreach ($data as $key => $value) {
				$data[$key]['category']=$p_models->find($value['category_id']);
			}
			
			// echo "<pre>"; print_r($data); echo "</pre>";die;
			include_once('views/product/list.php');


		}
		public function detail(){
			
			$code=$_GET['code'];
			$product=$this->model->find($code);
				
				$p_models=new category();
				$product['category']=$p_models->find($product['category_id']);
				// echo "<pre>"; print_r($product); echo "</pre>";die;
			include_once('views/product/detail.php');

		}
		public function add(){
			include_once('views/product/add.php');
		}
		public function process(){
			$data = $_POST;	
			move_uploaded_file($_FILES["file"]["tmp_name"], "public/image/product/" .$_FILES["file"]["name"]);
			$link= "public/image/product/" .$_FILES["file"]["name"];
					
			$data['picture']=$link;

			 
		    $status = $this->model->insert($data);
		    if ($status==true) {
		    	setcookie('msg','Thêm mới thành công!',time()+10);
		    	header('Location:?mod=product&act=list');
		    }else{
		    	setcookie('msg','Thêm mới thấy bại!',time()+10);
		    	header('Location:?mod=product&act=list');
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
		    	header('Location:?mod=product&act=list');
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
		    	header('Location:?mod=product&act=list');
		    }
	
		}


	}
 ?>
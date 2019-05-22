<?php  
	include_once('models/category.php');
	class categorycontrollers{

		public function list(){
			$p_models=new category();
			$data=$p_models->getAll();
			// print_r($data); die;
			include('views/category/category_list.php');
		}
		public function detail(){
			$p_models=new category();
			$code=$_GET['code'];
			// echo $code; die;
	   	 	$category=$p_models->find($code); // cái này là find kìa. tìm theo $code
			include_once('views/category/category_detail.php');

		}
		public function add(){
			include_once('views/category/category_add.php');
		}
		public function process(){
			$data = $_POST;
			
			
			$p_models=new category();
		    $status = $p_models->insert($data);

		    if ($status==true) {
		    	setcookie('msg','Thêm mới thành công!',time()+10);
		    	header('Location:?mod=category&act=list');
		    }else{
		    	setcookie('msg','Thêm mới thấy bại!',time()+10);
		    	//header('Location:?mod=category&act=add');
		    }

			
		}
		public function edit(){
			$p_models=new category();
			$code=$_GET['code'];
			$row=$p_models->find($code);
			include_once('views/category/category_edit.php');

		}
		public function update(){
			$data = $_POST;
			$p_models=new category();
		    $status = $p_models->update($data);

		    if ($status==true) {
		    	setcookie('msg','update thành công!',time()+10);
		    	header('Location:?mod=category&act=list');
		    }else{
		    	setcookie('msg','update thấy bại!',time()+10);
		    	//header('Location:?mod=category&act=add');
		    }

			
		}
		public function delete(){
			$p_models=new category();
			$code=$_GET['code'];
			$status=$p_models->delete($code);
			
			  if ($status==true) {
		    	setcookie('msg','xóa thành công!',time()+10);
		    	header('Location:?mod=category&act=list');
		    }else{
		    	setcookie('msg','xóa thấy bại!',time()+10);
		    	header('Location:?mod=category&act=list');
		    }
	
		}


	}
 ?>
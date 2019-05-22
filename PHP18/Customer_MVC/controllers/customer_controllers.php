<?php  
	include_once('models/customer.php');
	class customercontrollers{

		public function list(){
			$p_models=new customer();
			$data=$p_models->getAll();
			include_once('views/customer/list.php');
		}
		public function detail(){
			$p_models=new customer();
			$code=$_GET['code'];
			$customer=$p_models->find($code);
			include_once('views/customer/detail.php');

		}
		public function add(){
			include_once('views/customer/add.php');
		}
		public function process(){
			$data = $_POST;
			$p_models=new customer();
		    $status = $p_models->insert($data);

		    if ($status==true) {
		    	setcookie('msg','Thêm mới thành công!',time()+10);
		    	header('Location:?mod=customer&act=list');
		    }else{
		    	setcookie('msg','Thêm mới thấy bại!',time()+10);
		    	//header('Location:?mod=customer&act=add');
		    }

			
		}
		public function edit(){
			$p_models=new customer();
			$code=$_GET['code'];
			$row=$p_models->find($code);
			include_once('views/customer/edit.php');

		}
		public function update(){
			$data = $_POST;
			$p_models=new customer();
		    $status = $p_models->update($data);

		    if ($status==true) {
		    	setcookie('msg','update thành công!',time()+10);
		    	header('Location:?mod=customer&act=list');
		    }else{
		    	setcookie('msg','update thấy bại!',time()+10);
		    	//header('Location:?mod=customer&act=add');
		    }

			
		}
		public function delete(){
			$p_models=new customer();
			$code=$_GET['code'];
			$status=$p_models->delete($code);
			  if ($status==true) {
		    	setcookie('msg','xóa thành công!',time()+10);
		    	header('Location:?mod=customer&act=list');
		    }else{
		    	setcookie('msg','xóa thấy bại!',time()+10);
		    	header('Location:?mod=customer&act=list');
		    }
	
		}


	}
 ?>
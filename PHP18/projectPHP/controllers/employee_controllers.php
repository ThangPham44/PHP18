<?php  
	include_once('models/products/employee.php');
	class employeecontrollers{


			var $model;

		function __construct(){
			$this->model=new employee;
		}
		public function list(){
			$p_models=new employee();
			$data=$p_models->getAll();
			// print_r($data); die;
			include('views/employee/employee_list.php');
		}
		public function detail(){
			$p_models=new employee();
			$code=$_GET['code'];
			// echo $code; die;
	   	 	$employee=$p_models->find($code); // cái này là find kìa. tìm theo $code
			include_once('views/employee/employee_detail.php');

		}
		public function add(){
			include_once('views/employee/employee_add.php');
		}
		public function process(){
			$data = $_POST;
			//print_r($_FILES); die; 
			// if($_FILES["file"]["error"] > 0){
			// 	echo "lỗi upload images";
			// 	die;			}
			// else {
				move_uploaded_file($_FILES["file"]["tmp_name"], "public/image/employee/" .$_FILES["file"]["name"]);
				$link= "public/image/employee/" .$_FILES["file"]["name"];
			// }			
			$data['employee_image']=$link;
			$data['employee_password']=md5($data['employee_pass']); 
			// echo "<pre>";
			// print_r($data);echo "</pre>";
			// die; 
			
		    $status = $this->model->insert_employee($data);
		 //    	echo "<pre>";
			// print_r($status);echo "</pre>";
			// die; 
			
		    if ($status==true) {
		    	setcookie('msg','Thêm mới thành công!',time()+10);
		    	header('Location:?mod=employee&act=list');
		    }else{
		    	setcookie('msg','Thêm mới thấy bại!',time()+10);
		    	//header('Location:?mod=employee&act=add');
		    }

			
		}
		public function edit(){
			$p_models=new employee();
			$code=$_GET['code'];
			$row=$p_models->find($code);
			include_once('views/employee/employee_edit.php');

		}
		public function update(){
			$data = $_POST;
			$p_models=new employee();
		    $status = $p_models->update($data);

		    if ($status==true) {
		    	setcookie('msg','update thành công!',time()+10);
		    	header('Location:?mod=employee&act=list');
		    }else{
		    	setcookie('msg','update thấy bại!',time()+10);
		    	//header('Location:?mod=employee&act=add');
		    }

			
		}
		public function delete(){
			$p_models=new employee();
			$code=$_GET['code'];
			$status=$p_models->delete($code);
			
			  if ($status==true) {
		    	setcookie('msg','xóa thành công!',time()+10);
		    	header('Location:?mod=employee&act=list');
		    }else{
		    	setcookie('msg','xóa thấy bại!',time()+10);
		    	header('Location:?mod=employee&act=list');
		    }
	
		}


	}
 ?>
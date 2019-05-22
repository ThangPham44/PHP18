<?php  
	include_once('models/employee.php');
	class employeecontroller{

		public function list(){
			$p_models=new employee();
			$data=$p_models->getAll();
			include_once('views/employee/list.php');
		}
		public function detail(){
			$p_models=new employee();
			$code=$_GET['code'];
			$employee=$p_models->find($code);
			include_once('views/employee/detail.php');

		}
		public function add(){
			echo " ";
		}
		public function process(){
			echo "tiến hành insert vào db";
		}

	}
 ?>
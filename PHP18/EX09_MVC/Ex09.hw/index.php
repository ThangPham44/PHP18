<?php 
	$mod=isset($_GET['mod'])?$_GET['mod']:'';

	$act=isset($_GET['act'])?$_GET['act']:'';


	switch ($mod) {
		case 'employee':
			
			include_once('controllers/employee_controllers.php');
			$employee_controllers=new employeecontroller();
			switch ($act) {
				case 'list':
					$employee_controllers->list();
					break;
				case 'detail':
					$employee_controllers->detail();
					break;
		
				case 'add':
					$employee_controllers->add();
					break;
				
				case 'process':
					$employee_controllers->process();
					break;

				default:
					echo "Không có chức năng này (action)";
					break;
			}
			break;
		
		default:
		echo "Không có module này";
			break;
	}
 ?>
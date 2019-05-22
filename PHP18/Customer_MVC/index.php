<?php 
	$mod=isset($_GET['mod'])?$_GET['mod']:'';

	$act=isset($_GET['act'])?$_GET['act']:'';


	switch ($mod) {
		case 'customer':
			
			include_once('controllers/customer_controllers.php');
			$customer_controllers=new customercontrollers();
			switch ($act) {
				case 'list':
					$customer_controllers->list();
					break;
				case 'detail':
					$customer_controllers->detail();
					break;
		
				case 'add':
					$customer_controllers->add();
					break;
				
				case 'process':
					$customer_controllers->process();
					break;

				case 'edit':
					$customer_controllers->edit();
					break;

				case 'update':
					$customer_controllers->update();
					break;

				case 'delete':
					$customer_controllers->delete();
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
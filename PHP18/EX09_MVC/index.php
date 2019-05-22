<?php 
	$mod=isset($_GET['mod'])?$_GET['mod']:'';

	$act=isset($_GET['act'])?$_GET['act']:'';


	switch ($mod) {
		case 'product':
			
			include_once('controllers/product_controllers.php');
			$product_controllers=new procductController();
			switch ($act) {
				case 'list':
					$product_controllers->list();
					break;
				case 'detail':
					$product_controllers->detail();
					break;
		
				case 'add':
					$product_controllers->add();
					break;
				
				case 'process':
					$product_controllers->process();
					break;

				case 'update':
					$product_controllers->update();
					break;
				case 'edit':
					$product_controllers->edit();
					break;
				case 'delete':
					$product_controllers->delete();
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
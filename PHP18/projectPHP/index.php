<?php 
	include_once('auth/auth.php');

	$mod=isset($_GET['mod'])?$_GET['mod']:'';

	$act=isset($_GET['act'])?$_GET['act']:'';
	session_start();
	$auth= new auth();

	switch ($mod) {
		case 'customer':
			$auth->check_login();
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
			case 'employee':
			$auth->check_login();
			include_once('controllers/employee_controllers.php');
				$employee_controllers=new employeecontrollers(); 
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
				case 'edit':
					$employee_controllers->edit();
					break;
				case 'update':
					$employee_controllers->update();
					break;
				case 'delete':
					$employee_controllers->delete();
					break;

				default:
					echo "Không có chức năng này (action)";
					break;
			}
			break;


			case 'product': 
				$auth->check_login();
			include_once('controllers/product_controllers.php');
			$product_controllers=new procductcontroller();
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
		


		case 'category':
			
			include_once('controllers/category_controllers.php');
			$category_controllers=new categorycontrollers();
			switch ($act) {
				case 'list':
					$category_controllers->list();
					break;
				
				case 'add':
					$category_controllers->add();
					break;
				
				case 'process':
					$category_controllers->process();
					break;

				case 'edit':
					$category_controllers->edit();
					break;

				case 'update':
					$category_controllers->update();
					break;

				case 'delete':
					$category_controllers->delete();
					break;

				default:
					echo "Không có chức năng này (action)";
					break;
			}

	
		break;


		case 'shop':
				$auth->check_login();
			include_once('controllers/shop_controllers.php');
			$shop_controllers=new shopcontroller();
			switch ($act) {
				case 'list':
					$shop_controllers->list();
					break;
				case 'detail':
					$shop_controllers->detail();
					break;
				case 'confirm':
					$shop_controllers->confirm();
					break;
				case 'add2cart':
					$shop_controllers->add2cart();
					break;
				 case 'delete':
                    $shop_controllers->delete();
                    break;
                case 'minus':
                    $shop_controllers->minus();
                    break;
                case 'cart':
                    $shop_controllers->cart();
                    break;
                case 'checkout':
                    $shop_controllers->checkout();
                    break;
                 case 'product':
                    $shop_controllers->product();
                    break;
				default:
					echo "Không có chức năng này (action)";
					break;
			}

	
		break;

		case 'login':
			include_once('controllers/login_controllers.php');
			$login_controllers=new logincontroller();
			switch ($act) {
				case 'list':
					$login_controllers->list();
					break;
				case 'login':
					$login_controllers->login();
					break;

		}
		case 'bill':
			include_once('controllers/bills_controllers.php');
			$bill_controllers=new billcontroller();
			switch ($act) {
				case 'list':
					$bill_controllers->list();
					break;
				case 'delete':
					$bill_controllers->delete();
					break;

		}
		break;
		default:
		echo "Không có module này";
			break;
	}
 ?>

	<?php  
include_once('models/products/bills.php');
	// include_once('models/category.php');
class billcontroller{

  var $model;

  function __construct(){
     $this->model=new bill;
 }

 public function list(){
		//$p_models=new bill();
     $data=$this->model->getAll();

    include_once('views/bill/bill_list.php');


}
public function delete(){
			
			$code=$_GET['code'];
			// print_r($code);die;
			$status=$this->model->delete($code);
			// print_r($status);die;
			  if ($status==true) {
		    	setcookie('msg','xóa thành công!',time()+10);
		    	header('Location:?mod=bill&act=list');
		    }else{
		    	setcookie('msg','xóa thấy bại!',time()+10);
		    	header('Location:?mod=bill&act=list');
		    }
	
		}




}
?>

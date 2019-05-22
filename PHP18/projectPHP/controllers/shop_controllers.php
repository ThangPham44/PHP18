<?php  
include_once('models/products/shop.php');
	// include_once('models/category.php');
class shopcontroller{

  var $model;

  function __construct(){
     $this->model=new shop;
 }

 public function list(){
			// lít shop
     $data=$this->model->getAll();
				// lấy thông itn category
     $p_models=new shop();
     foreach ($data as $key => $value) {
        $data[$key]['category']=$p_models->find($value['category_id']);
    }

			// echo "<pre>"; print_r($data); echo "</pre>";die;
    include_once('views/shop/karma/index.php');


}
public function product(){
    $data=$this->model->getAll();
    include_once('views/Shop/karma/category.php');
}
public function detail(){

 $code=$_GET['code'];
			//print_r($code);die;
 $shop=$this->model->find($code);
 include_once('views/Shop/karma/detail.php');

}

public function add2cart() {

    $row = array();
    $code = $_GET['code'];
    $shop = $this->model->find($code);

    if (isset($_SESSION['cart'][$code])) {
        $_SESSION['cart'][$code]['quantity']++;
    } else {
        $row = $shop;
        $row['quantity'] = 1;
        $_SESSION['cart'][$code] = $row;    
    }


    include_once('views/Shop/karma/cart.php');
}

public function delete() {
    $code = $_GET['code'];

    session_start();
    unset($_SESSION['cart'][$code]);
    include_once('views/Shop/karma/cart.php');
//            header('Location: view/shop/cart.php');
}


public function minus() {
    $code = $_GET['code'];
           // session_start();
    if (($_SESSION['cart'][$code]['quantity']) > 1) {
        $_SESSION['cart'][$code]['quantity'] -= 1;
    }
    else{
        unset($_SESSION['cart'][$code]);

    }
    include_once('views/Shop/karma/cart.php');
}

public function cart() {            
    session_start();
    include_once('views/Shop/karma/cart.php');
}

public function checkout() {            

    include_once('views/Shop/karma/checkout.php');
}

public function confirm(){
    if (isset($_SESSION['cart'])) {
        $data= array();
        $data['customer_code'] = 'KH'.time();
        $data['customer_name'] = $_POST['customer_name'];
        $data['customer_birthday'] = $_POST['customer_birthday'];
        $data['customer_email'] = $_POST['customer_email'];
        $data['customer_mobile'] = $_POST['customer_mobile'];
        $data['customer_address'] = $_POST['customer_address'];

        $status= $this->model->insert_customer($data);

        $bill=array();
        $bill['bill_code']='HD'.time();
        $bill['customer_code']=$data['customer_code'];
        $bill['time_bill']=time();
        $bill['employee_code']='online';
        $bill['total_money'] = $_SESSION['total_money'];

        $tong_tien=0;
        $tien_goc=0;

        $status=$this->model->insert_bill($bill);
        
        foreach ($_SESSION['cart'] as $product) {
            $prod['bill_code']=$bill['bill_code'];
            $prod['id']=$product['id'];
            $prod['quantity_buy']=$product['quantity'];
            $prod['into_money']=$product['quantity']*$product['gia_ban'];

            $tong_tien+=$prod['into_money'];
            $tien_goc=$product['quantity']*$product['gia_ban'];

            $status2=$this->model->create_detail($prod);
            $status3=$this->model->reduceQuantity($prod['id'],$prod['quantity_buy']);
        }
        unset($_SESSION['cart']);
        header('Location:?mod=shop&act=list');
    }
}

}
?>
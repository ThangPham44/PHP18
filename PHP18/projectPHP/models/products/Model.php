<?php 
include_once('Connection.php');
class Model{
		var $conn;
		var $table='';
		var $primary_key='id';
		function __construct(){
			$connection_object = new Connection();
			$this->conn=$connection_object->conn;
		}
	public function getAll(){
	
	$query= "SELECT * FROM ".$this->table;
	$result = $this->conn->query($query);
	$data = array();
	while($row = $result->fetch_assoc()) { 
		$data[] = $row;
		// echo "<pre>"; print_r($data); echo "</pre>";
	}
	// die;
	return $data;
}
public function find($code){

	$query= "SELECT * FROM ".$this->table."  WHERE ".$this->primary_key."='".$code."'";
	$result =$this->conn->query($query);
	$data = array();
	$shop  = $result->fetch_assoc(); 
	
	return $shop;
}
public function insert($data){
	unset($data['submit']);
	//unset($data['picture']);
	$fields='';
	$values='';
	foreach ($data as $key => $value) {
		$fields.=$key . ',';
		$values.="'".$value."',";
		
	}
	$fields = trim($fields,',');
	$values = trim($values,',');
	echo "<br> $fields";
	echo "<br> $values";

	
	

	$query=  "INSERT INTO ".$this->table."(".$fields.") values(".$values.")";
	// echo "$query";die;
	$result =$this->conn->query($query);
	//print_r($result);die;
		return $result;
}

public function insert_customer($data){
	
	$query=  "INSERT INTO customers (customer_code,customer_name,customer_address,customer_birthday,customer_email,customer_mobile)
                VALUES ('".$data['customer_code']."','".$data['customer_name']."','".$data['customer_address']."','".$data['customer_birthday']."','".$data['customer_email']."','".$data['customer_mobile']."')";
	// echo "$query";die;
	$result =$this->conn->query($query);
	//print_r($result);die;
		return $result;
}

public function update($data){

		// echo "<pre>"; print_r($data); echo "</pre>";die;

	$query= "UPDATE products SET name='".$data['name']."',quantity='".$data['quantity']."',gia_ban='".$data['gia_ban']."' WHERE id='".$data['code']."'";
	$result = $this->conn->query($query);
	// echo $query;die;
	
	return $result;
}

public function delete($code){

	$query="DELETE FROM  ".$this->table." WHERE ".$this->primary_key."='".$code."'";
	$result =$this->conn->query($query);

	
	return $result;
}

public function insert_bill($data){
	$query=  "INSERT INTO bills (bill_code,customer_code,total_money,time_bill,employee_code) 
                VALUES ('".$data['bill_code']."','".$data['customer_code']."','".$data['total_money']."','".$data['time_bill']."','".$data['employee_code']."' )";
                $result=$this->conn->query($query);
                return $result;

}
public function create_detail($data){
	$query=  "INSERT INTO detail_bill (bill_code,product_code,quantity_buy,into_money) 
                VALUES ('".$data['bill_code']."','".$data['id']."','".$data['quantity_buy']."','".$data['into_money']."' )";

                $result=$this->conn->query($query);
                return $result;
}

public function  reduceQuantity($product_code,$quantity_buy){
	$query="SELECT quantity FROM products WHERE id='".$product_code."' ";

	$num=0;
	$result=$this->conn->query($query);
	$num=$result->fetch_assoc()['quantity'];
	$quantity_con=$num-$quantity_buy;

	$query="UPDATE products SET quantity=".$quantity_con." WHERE id ='".$product_code."'";

	$result=$this->conn->query($query);
	return $result;
}
public function insert_employee($data){
	
	$query=  "INSERT INTO employees (employee_code,employee_name,employee_address,employee_birthday,employee_email,employee_mobile)
                VALUES ('".$data['employee_code']."','".$data['employee_name']."','".$data['employee_address']."','".$data['employee_birthday']."','".$data['employee_email']."','".$data['employee_mobile']."')";
	// echo "$query";die;
	$result =$this->conn->query($query);
	//print_r($result);die;
		return $result;
}


}
?>
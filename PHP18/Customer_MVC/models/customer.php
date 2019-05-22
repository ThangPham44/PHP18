<?php 
class customer{
	public function getAll(){

	$servername = "localhost";
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "thangpham";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// require_once('connection.php');

	$query= "SELECT * FROM customers";
	$result = $conn->query($query);
	$data = array();
	while($row = $result->fetch_assoc()) { 
		$data[] = $row;
	}
	return $data;
}
public function find($code){

	$servername = "localhost";
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "thangpham";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// require_once('connection.php');

	$query= "SELECT * FROM customers  WHERE code='".$code."'";
	$result = $conn->query($query);
	$data = array();
	$customer  = $result->fetch_assoc(); 
	
	return $customer;
}
public function insert($data){

	$servername = "localhost";
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "thangpham";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// require_once('connection.php');

	$query=  "INSERT INTO customers (code,name,email,mobile,address)
                VALUES ('".$data['code']."','".$data['name']."','".$data['email']."','".$data['mobile']."','".$data['address']."')";

	$result = $conn->query($query);
		return $result;
}
public function update($data){

	$servername = "localhost";
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "thangpham";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// require_once('connection.php');

	$query= "UPDATE customers SET code='".$data['code']."',name='".$data['name']."',email='".$data['email']."',mobile='".$data['mobile']."',address='".$data['address']."' WHERE code='".$data['code']."'" ;
	$result = $conn->query($query);

	
	return $result;
}

public function delete($code){

	$servername = "localhost";
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "thangpham";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// require_once('connection.php');

	$query="DELETE FROM customers WHERE code='".$code."'";
	$result = $conn->query($query);

	
	return $result;
}

}





?>
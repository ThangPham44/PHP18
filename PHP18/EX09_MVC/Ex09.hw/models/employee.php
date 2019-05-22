<?php 
class employee{
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

	$query= "SELECT * FROM employees";
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

	$query= "SELECT * FROM employees  WHERE code='".$code."'";
	$result = $conn->query($query);
	$data = array();
	$employee  = $result->fetch_assoc(); 
	
	return $employee;
}
}
?>
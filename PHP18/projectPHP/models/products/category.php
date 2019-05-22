<?php 
class category{
	public function getAll(){

	$servername = "localhost";
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "qlbh";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// require_once('connection.php');

	$query= "SELECT * FROM category";
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
	$dbname = "qlbh";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// require_once('connection.php');

	$query= "SELECT * FROM category  WHERE category_code='".$code."'";
	$result = $conn->query($query);
	$data = array();
	$category  = $result->fetch_assoc(); 
	
	return $category;
}
public function insert($data){

	$servername = "localhost";
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "qlbh";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$query=  "INSERT INTO category 
                VALUES ('".$data['category_code']."','".$data['category_name']."')";

              
	$result = $conn->query($query);

		return $result;
}
public function update($data){

	$servername = "localhost";
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "qlbh";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// require_once('connection.php');
// cái category_code là giống tên coojtowr trongDB.  $data['code'] là lấy ở mảng lấy từ form. tương tự các trg khác.uhm ok kì diệu vậy ":v"
 	$query= "UPDATE category SET category_code='".$data['category_code']."',category_name='".$data['category_name']."'" ;
	$result = $conn->query($query);

	
	return $result;
}

public function delete($code){

	$servername = "localhost";
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "qlbh";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	// require_once('connection.php');

	$query="DELETE FROM category WHERE category_code='".$code."'";
	$result = $conn->query($query);

	
	return $result;
}

}
?>
<?php 
	$servername = "php18.zent";
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
 ?>
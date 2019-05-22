<?php 
	include_once('env.php');
	class Connection{
	// Tao ra ket noi den CSDL connection
	var $conn;
	function __construct(){
		$this->conn = new mysqli(HOST, NAME, PASS, DBNAME);

		$this->conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
	}
	}
}	

 ?>
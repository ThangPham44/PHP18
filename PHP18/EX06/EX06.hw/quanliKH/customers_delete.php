<?php 
	
	include_once('connection.php');	
	// $data = $_POST;
  	$code = $_GET['code'];

	$query = "DELETE FROM customers WHERE code='".$code."'";


    $status = $conn->query($query);
  
  	header('location:customers.php');
 ?>
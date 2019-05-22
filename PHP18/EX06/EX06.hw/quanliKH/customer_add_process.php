<?php 
	
	include_once('connection.php');	
	$data = $_POST;


	$query = "INSERT INTO customers (code,name,email,mobile,address)
                VALUES ('".$data['code']."','".$data['name']."','".$data['email']."','".$data['mobile']."','".$data['address']."')";


    $status = $conn->query($query);
  
  
    header('location:customers.php');
 ?>
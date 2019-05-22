<?php 	
	include_once('connection.php');	
	$data = $_POST;

	$query = "INSERT INTO employees (code,name,email,mobile,address,password)
                VALUES ('".$data['code']."','".$data['name']."','".$data['email']."','".$data['mobile']."','".$data['address']."','".$data['password']."')";
    $status = $conn->query($query);
      header('location:employee.php');
 ?>
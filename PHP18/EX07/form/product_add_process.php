<?php 

	
	include_once('connection.php');	
	$data = $_POST;


	$query = "INSERT INTO form (code,name,price,quantity,gia_nhap,gia_ban)
                VALUES ('".$data['code']."','".$data['name']."','".$data['price']."','".$data['quantity']."','".$data['gia_nhap']."','".$data['gia_ban']."')";


    $status = $conn->query($query);
   
		 header('location:products.php');

 ?>
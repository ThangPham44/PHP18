<?php 
require_once('connection.php');
$data=$_POST;
$query="UPDATE form SET code='".$data['code']."',name='".$data['name']."',quantity='".$data['quantity']."',gia_ban='".$data['gia_ban']."',gia_nhap='".$data['gia_nhap']."' WHERE code='".$data['code']."'";
$result = $conn->query($query);


header('location:products.php');

 ?>

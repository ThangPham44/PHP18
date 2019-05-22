<?php 
require_once('connection.php');
$data=$_POST;

$query="UPDATE customers SET name='".$data['name']."',email='".$data['email']."',mobile='".$data['mobile']."',address='".$data['address']."' WHERE code='".$data['code']."'";
$result = $conn->query($query);


header('location:customers.php');

?>


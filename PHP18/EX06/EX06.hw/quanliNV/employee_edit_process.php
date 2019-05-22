<?php 
require_once('connection.php');
$data=$_POST;

$query="UPDATE employees SET name='".$data['name']."',email='".$data['email']."',mobile='".$data['mobile']."',address='".$data['address']."',password='".$data['password']."' WHERE code='".$data['code']."'";
$result = $conn->query($query);


header('location:employee.php');

?>


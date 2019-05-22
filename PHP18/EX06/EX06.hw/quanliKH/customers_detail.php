<?php 
require_once('connection.php');
$code=$_GET['code'];
$query = "SELECT * FROM customers WHERE code='".$code."'";
$result = $conn->query($query);
$customers=$result->fetch_assoc();
echo json_encode($customers);
?>



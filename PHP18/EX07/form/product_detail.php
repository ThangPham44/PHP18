<?php 
require_once('connection.php');
$code=$_GET['code'];
$query = "SELECT * FROM form WHERE code='".$code."'";
$result = $conn->query($query);
$product=$result->fetch_assoc();
echo json_encode($product);
?>



<?php 
require_once('connection.php');
$code=$_GET['code'];
$query = "SELECT * FROM employees WHERE code='".$code."'";
$result = $conn->query($query);
$employees=$result->fetch_assoc();
echo json_encode($employees);
?>



<?php 
	session_start();
	if (isset($_POST['submit'])) {
		echo "Thông tin sinh viên :";
		echo "<br>".$_POST['user'];
		echo "<br>".$_POST['msv'];
		echo "<br>".$_POST['sđt'];
		echo "<br>".$_POST['email'];
		if (isset($_POST['nam'])) {
		echo "<br>".$_POST['nam'];
		}else{
			echo "<br>".$_POST['nu'];
		}	
		
		echo "<br>".$_POST['dc'];
	}
 ?>
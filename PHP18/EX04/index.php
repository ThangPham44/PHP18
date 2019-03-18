<?php 
	session_start();
	if ($_SESSTION['login']=1) {
		echo "Đây là trang index";
		echo "<br>";
		echo"<button href='post-form.php'>logout</button>";
	}else{
		header("Location:post-form.php");
	}
 ?>
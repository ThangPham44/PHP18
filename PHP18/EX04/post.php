<?php 
	session_start();
	if (isset($_POST['submit'])) 
		$user= $_POST['email'];
		echo "<br>";
		$pw= $_POST['password'];
		if ($user=="thang"&&$pw=="123456") {
			$_SESSION['login']=1;
			header("Location:index.php");

		}
	else{

		$_SESSION['login']=0;
		setcookie('msg','Đăng nhập thất bại',time()+3);
		//hiển thị lại trang đăng nhập !!!
		header("Location:post-form.php");
	}



 ?>
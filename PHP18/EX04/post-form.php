	<?php 
		session_start();
		if (isset($_COOKIE['msg'])) {
			$msg= $_COOKIE['msg'];
		}else{
			$msg='';
		}
	 ?>

	<!DOCTYPE html>


	<html>
	<head>
		<meta charset="utf-8">
		<title>Document</title>
	</head>
	<body>
		<form name="main-form" method="post" action="post.php"> 
			<?php 
				echo $msg;
			 ?>
			<input type="text" name="email">
			<input type="password" name="password">
			<input type="submit" name="submit" >
		</form>

	</body>
	</html>
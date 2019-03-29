<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</head>
<body>
	<h3 class="text-center">Xác nhận thanh toán</h3>
	<form action="process_sendmail.php" method="POST" name="form" class="text-center">

		<input type="text" name="tenkh" placeholder="Nhập tên "><br><br>
		<input type="text" name="" placeholder="Số điện thoại "><br><br>		
		<input type="text" name="" placeholder="Địa chỉ của bạn ">	<br><br>	
		<input type="text" name="email" placeholder="nhập email "><br><br>
		<div class="g-recaptcha" data-sitekey="6LeXzZgUAAAAAGWfCDvg-o59osav6DD_f6q39aNy"></div>		
			<button class="" name="submit">Nhập thông tin</button>


	</form>
</body>
</html>
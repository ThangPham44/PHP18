<?php 
class logincontroller{

	public function list(){
		include_once('views/login/login.php');
	}
	public function login(){
		$user= $_POST['email'];
		$pw= $_POST['password'];
	if ($user=="thang@gmail.com"&&$pw=="123456") {
		$_SESSION['login']=1;
		header("Location:?mod=employee&act=list");

	}
	else{

		$_SESSION['login']=0;
		setcookie('msg','Đăng nhập thất bại',time()+3);
		//hiển thị lại trang đăng nhập !!!
		header("Location:mod=login&act=list");
	}
}

}
?>
<?php 
	class auth{
		function check_login(){
			if(!isset($_SESSION['login'])){
					header('Loccation:?mod=login&act=list');
			}

		}
		// function check_login_online(){
		// 	if(!isset($_SESSION['login_customer'])){
		// 			header('Loccation:?mod=login&act=list');
		// }
	// }
	}
 ?>
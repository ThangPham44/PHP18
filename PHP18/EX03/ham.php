<?php 
	function Kiem_tra_chan_le($numb){
if($numb%2==0) {
	echo $numb."&nbsplà số chẵn <br>";
}else{
	echo $numb."là số lẻ<br>";
}

	}
	Kiem_tra_chan_le(10);


	function kiem_tra_chan_le_xin($numb){

		echo ($numb%2==0)?$numb.'&nbsplà số chẵn':$numb.'&nbsplà số lẻ' ;
	}
	 kiem_tra_chan_le_xin(15);


	 function sum($a,$b){
	 	echo "<br> Tổng là $a+$b=".($a,$b);
	 }
	 function tong($a,$b){
	 	echo "<br> Tổng là $a+$b=".($a,$b);
	 }
	 function tinh_tong($a,$b){
	 	return $a+$b;
	 }
	 $lang=$_GET['lang'];
	  $a=10;
	  $b=20;
	  if ($lang=='vi') {
	  	echo "<br> Tong=".tinh_tong($a,$b);
	  }
	  elseif ($lang=='en') {
	  	echo "<br> Tong=".tinh_tong($a,$b);
	  }




 ?>
 <!DOCTYPE html>
 <html>
 	<head>
 		<title></title>
 	</head>
 	<body>
 		
 		<br>
 		<a href="ham.php?lang=vi" "email me">tiếng việt </a>
 		<a href="ham.php?lang=en" "email me">tiếng anh </a>
 	
 	</body>



 </html>
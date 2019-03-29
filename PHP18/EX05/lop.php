<?php 

	class Car{

		var $brand;
		var $price;
		var $color;
		var $origin;


		function run(){
			echo "Đây là phương thức chạy của lớp oto";
		}

	}
	$bmw =new  car();
	$audi = new car();

	$audi->brand='Q7';
	$audi->price='1M';
	$audi->color='Red';
	$audi->origin='Mỹ';

	echo "<br> hãng xe " . $audi->brand . '<br>' ;

	echo  $audi->run();
 ?>
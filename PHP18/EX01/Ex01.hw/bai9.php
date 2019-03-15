<?php
	$sum=0;
	$giaiThua=1;
	$n='';
	if ($n<=0) {
		echo "Nhập n lớn hơn 0 ^^";
	}else{
		for ($i=1; $i <=$n ; $i++) { 
			$giaiThua*=$i;
			$sum+="$i/$giaiThua";
		}
		echo "Tổng là:" .$sum;
	}
?>
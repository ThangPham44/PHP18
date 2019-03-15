<?php
	$a='';
	$b='';
	$c='';
	
	if ($a==0) {
		if ($b==0) {
			if ($c==0) {
				echo "Phương trình vô số nghiệm";
			}else {
				echo "Phương trình vô nghiệm";
			}
		}else
		echo "pt có nghiệm là :" ."x1=-$b/$c";
	}
	else{
		$delta=($b*$b)/(4*$a*$c);
		if ($delta<0) {
			echo "Phương trình vô nghiệm";
		}elseif ($delta==0) {
			echo "Phương trình có nghiệm kép " ."x1=x2=(-$b)/(2*$a)";
		}else
		echo "nghiệm x1 là :"."x1=((-$b)+sqrt($delta))/(2*$a)";
		echo "nghiệm x1 là :"."x2=((-$b)-sqrt($delta))/(2*$a)";

	}
?>
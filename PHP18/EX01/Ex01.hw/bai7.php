<?php
	$number=7;
	while ($number>=1) {
		for ($j=1; $j <=7-$number; $j++) 
			echo "&nbsp&nbsp&nbsp";
		
		for ($i=1; $i <=$number ; $i++) 
			echo "* ";
		 
		echo "<br>";
		$number--;
		
		
	}
?>
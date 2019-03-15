<?php
	$number=1;
	while ($number<=7) {
		for ($i=1; $i <= 7-$number; $i++) { 
			echo "&nbsp&nbsp&nbsp";
		}
		for ($j=1; $j <=$number ; $j++) { 
			echo "* ";
		}
		echo "<br>";
		$number++;
	}
?>
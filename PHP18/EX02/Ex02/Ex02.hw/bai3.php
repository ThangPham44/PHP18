<?php 
	

$arr = array(1,4,2,6,9,100,45,8,20); 
echo "<pre>";
		print_r($arr);
	echo "</pre>";
	
sort($arr);
$arrlength=count($arr);
for ($i=0; $i < $arrlength; $i++) { 
	echo $arr[$i];

	echo "<br>";
}
$final=array_pop($arr);
echo "Phần tử lớn nhất của mảng là :".$final;

?>
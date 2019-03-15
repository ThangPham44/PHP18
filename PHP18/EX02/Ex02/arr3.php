<?php

$name = array('Nam', 'Khánh', 'Bình', 'Hậu' , 'Tuấn'); 
var_dump(in_array('Hậu', $name));


echo "<br>số lượng phần tử trong mảng:".count($name);

echo "<br>";

$index = array_search('Hậu', $name);    

if($index !== FALSE){
	echo "Vị trí phần tử là: " . $index;
}else{
	echo "Không tìm thấy phần tử";
}


echo "<br>";
$arr = array(1,3,1,5,"zent",1,5,"zent");

$arr_result = array_count_values($arr);

echo "<pre>";
print_r($arr_result);
echo "</pre>";



?>
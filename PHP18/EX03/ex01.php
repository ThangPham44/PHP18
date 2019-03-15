<?php 
$name ="Zent Group - Be all you can be !";

// Cat chuoi theo ky tu mong muon
$data = explode(" ",$name);

echo "<pre>";
	print_r($data);
echo "</pre>";


// Ghép chuoi theo ky tu mong muon
$name = implode(" ",$data);

echo $name;


// Ham bam du lieu -> bao mat
echo "<br> Hàm băm dữ liệu:" .md5('thắng đẹp trai');

echo "<br> Hàm băm dữ liệu: " .sha1('123456');


//cat chuoi Con
echo "<br> Cắt chuỗi con:".substr($name,2,10); // cat tu vi tri 2, chuoi con co do dai 10

echo "<br>".strstr($name,"Be");
// Cat chuoi con bat dau tu chu Be
 ?>
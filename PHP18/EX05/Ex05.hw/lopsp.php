<?php 
class ttsp
{

	var $masp;
	var $tensp;
	var $soluong;
	var $dongia;
	var $hangsanxuat;


	function inttsp(){
		echo 'mã sản phẩm:' . $this->masp . '<br>';
		echo 'Tên sản phẩm:' . $this->tensp . '<br>';
		echo 'Số lượng:' . $this->soluong . '<br>';
		echo 'đơn giá:'. $this->dongia . '<br>';
		echo 'Xuất xứ:' . $this->hangsanxuat . '<br>';
	}
}


$iphone = new ttsp();
$iphone->masp = '001';
$iphone->tensp = 'iphone';
$iphone->soluong = '05';
$iphone->dongia = '14000000';
$iphone->hangsanxuat = 'american';

$xiaomi = new ttsp();
$xiaomi->masp = '001';
$xiaomi->tensp = 'xiaomi';
$xiaomi->soluong = '05';
$xiaomi->dongia = '15000000';
$xiaomi->hangsanxuat = 'china';

$samsung = new ttsp();
$samsung->masp = '001';
$samsung->tensp = 'samsung';
$samsung->soluong = '05';
$samsung->dongia = '16000000';
$samsung->hangsanxuat = 'hàn quốc';
	

echo $iphone->inttsp();
echo $xiaomi->inttsp();
echo $samsung->inttsp();


?>
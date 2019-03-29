<?php 
class ttsp
{

	var $masp='ip';
	var $tensp='iphone6s';
	var $soluong='2';
	var $dongia='12M';
	var $hangsanxuat='apple';


	function inttsp(){
		echo $this->masp . '<br>';
		echo $this->tensp . '<br>';
		echo $this->soluong . '<br>';
		echo $this->dongia . '<br>';
		echo $this->hangsanxuat . '<br>';
	}
}


class iphone  extends ttsp
{

}
$iphone=new iphone();
echo "Thông tin sản phẩm IP" . '<br>';
echo $iphone->inttsp();


class xiaomi extends ttsp
{
}	
	$xiaomi=new xiaomi();
	echo "Thông tin sản phẩm XIAOMI" . '<br>';
	echo $xiaomi->inttsp();


class samsung extends ttsp
{
}	
	$samsung=new samsung();
	echo "Thông tin sản phẩm SAMSUNG" . '<br>';
	echo $samsung->inttsp();


?>
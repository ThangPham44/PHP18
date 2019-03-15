<?php
	$arr= array('Thang' ,10 );
	echo "<pre>";
		print_r($arr);
	echo "</pre>";

	$info=array();
	$info['name']='Thang';
	$info['que quan']='Nam Dinh';
	$info['phone']='0941150036';
	echo "<br><br>Thong tin ";
	echo "<br> ten:".$info['name'];
	echo "<br> que quan:".$info['que quan'];
	echo "<br> phone:".$info['phone'];

	echo "<br><br>";

	foreach ($info as $key => $value) {
		echo "<br> Key:$key-Value:$value";
	}
	echo "<br><br>";
	foreach ($info as $val) {
		echo "<br> $val";
	}
?>
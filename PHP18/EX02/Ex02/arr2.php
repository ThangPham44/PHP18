<?php
	$info=array();
	$info['name']='Thang';
	$info['que quan']='Nam Dinh';
	$info['phone']='0941150036';
	$info['point']=array('gk'=>10,'ck'=>9);
	$info['subject']=array(
		'lap_trinh'=>array('java','PHP',"C/C#"),
		'ngoai_ngu'=>array('tiếng anh','tiếng nhật')
	);
	echo "<br><br>Thong tin ";
	echo "<br> ten:".$info['name'];
	echo "<br> que quan:".$info['que quan'];
	echo "<br> phone:".$info['phone'];
	echo "<br> Điểm tb:".($info['point']['gk']*0.3+$info['point']['ck']*0.7);
	echo "<br> Môn học:".($info['subject']['lap_trinh']['1']);

	echo "<pre>";
		print_r($info);
	echo "</pre>";




?>
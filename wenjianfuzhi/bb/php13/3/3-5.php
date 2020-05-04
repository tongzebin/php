<?php
	$res=array('a','b','c','d','e');
	$yb=array('a','c','d');
	$q=array('@','#','*');
	$qw=str_replace($yb,$q,$res,$num);
	var_dump($qw);
	echo $num;
	
	$z=md5(111111);
	$x=md5(1111111);
	echo($x)."<br>";
	echo($z).'<br>';
	if($x==$z){
		echo '密码正确';
	}else{
		echo '密码错误';
	}
	
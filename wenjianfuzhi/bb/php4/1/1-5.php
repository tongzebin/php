<?php
	/*
		比较运算符
		==	(数学中的=)
		值1==值2
		如果是两个等号,表示的是,值1和值2是否相等
	*/
	//==	只判断值是否相等,不考虑,不考虑是否相等
	$res=3=='3';
	var_dump($res);
	//!不等于
	$res=4!='4';
	var_dump($res);
	
	//====全等于(值和类型必须相等)
	$num1=10;
	$num='10';
	$num3=$num1===$num2;
	var_dump($num3);
	
	//!== 非全等于,除了全等其余的都是非全等
	$num1=10;
	$num2=10;
	$num3=$num1!==$num2;
	var_dump($num3);
	
	//如果是全等返回false
	//如果类型不等 返回 true
	//如果值不等 返回true
	$a=3;
	$b=2;
	//var_dump($a=$b);
	if($a==$b){
		echo 'true';
	}else{
		echo 'false';
	}
	//	大鱼号
	$res=3>5;
	var_dump($res);
	//	<小于号
	$res=5>=5;
	var_dump($res);
	//	<= 小于等于
	
	$res=6<=7;
	var_dump($res);
	
	
	
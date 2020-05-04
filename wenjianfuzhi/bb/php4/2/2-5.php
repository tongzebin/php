<?php
	$res=3=='3';
	var_dump($res);
	
	$res=4!='4';
	var_dump($res);
	
	$num1=10;
	$num2='10';
	$num3=$num1===$num2;
	var_dump($num3);
	
	$num1=10;
	$num2=10;
	$num3=$num1!==$num2;
	var_dump($num3);
	
	$a=3;
	$b=2;
	if($a==$b){
		echo 'true';
	}else{
		echo 'false';
	}
	$res=3>5;
	var_dump($res);
	
	$res=3<5;
	var_dump($res);
	
	$res=5>=5;
	var_dump($res);
	$res=6>=7;
	var_dump($res);
	
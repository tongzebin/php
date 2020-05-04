<?php
	$arr=array(null,13,'agh',123);
	$arr2=array(null,13,'agh',123);
	$arr3=array(null,13,'agh',123);
	$arr4=array(null,13,'agh',123);
	$arr5=array($arr,$arr2,$arr3,$arr4);
	var_dump($arr5);
	echo $arr5[1][1];
	$w=array(array(1,2,3),array(3,4,1));
	var_dump($w);
	$s=[
		[1,23,4],
		[1,23,4],
		[1,23,4]
	];
	var_dump($s);
	
	
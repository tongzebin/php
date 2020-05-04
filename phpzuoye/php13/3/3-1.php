<?php
	$q=-23;
	$w=abs($q);
	var_dump($w);
	
	$num=3.2213;
	$res=ceil($num);
	var_dump($res);
	
	$num=3.213;
	$res=round($num,2);
	var_dump($res);
	
	$num=3.1231;
	$res=floor($num);
	var_dump($res);
	
	$res=max(23,14,2,3,3);
	var_dump($res);
	
	$res=min(123,3453,23,355);
	var_dump($res);
	
	$res=mt_rand(123,1233);
	var_dump($res);
	
	$res=rand(12,25);
	var_dump($res);
	
	$res=pi();
	var_dump($res);
	
	$res=pow(12,3);
	var_dump($res);
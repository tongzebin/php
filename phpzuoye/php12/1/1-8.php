<?php
	/*
		多维数组
			就是一个数组的值是数组,在这个数组中还有数组,就是多维数组
	*/
	$arr=array(
		array(1,23,4,5,6,6),
		array(1,23,4,5,6,6),
		array(1,'asad',4,5,6,6),
		array(1,23,4,5,'啥价格表尼玛阿司匹林科技馆bnma[]s',6),
		array(1,23,4,5,6,6),
	);
	echo '<pre>';
	
	print_r($arr);
	
	echo $arr[1][2];
	echo $arr[1][3];
	echo $arr[3][4];
	
	
	
	
	
	
	
	
	
	
	
	
	
	
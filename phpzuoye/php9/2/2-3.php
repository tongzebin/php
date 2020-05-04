<?php
	$name='张三';
	echo '函数外部变量'.$name;
	function qwe(){
		global $name;
		$name='李四';
		echo '函数内部'.$naem;
	}
	echo '函数外部'.$name;




	
	$su1=123;
	$su2=238;
	$su3=387;
	
	function cqjbl(){
		echo $GLOBALS['su1']; 
		echo $GLOBALS['su3']; 
	}
	echo $GLOBALS['su2'];
	cqjbl();
	
	
	$ar=array(213,123,24,233);
	var_dump($ar);
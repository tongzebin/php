<?php
	$arr=array('唱吧里面','gfhjkl');
	unset($arr[0]);
	var_dump($arr);
	$arr[3]='贵和吉客隆';
	var_dump($arr);
	
	$arr2=array('name'=>'张三','age'=>123);
	var_dump($arr2);
	$arr2['name']='ghjkl离开家';
	var_dump($arr);
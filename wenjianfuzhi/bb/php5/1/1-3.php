<?php
	//检测变量是否被设置了值
	$name='asd';
	//$res=isset($name);
	$res=isset($name)?$name:'$name这个变量没有被设置';
	var_dump($res);
<?php
	//转换为布尔类型为false的情况
	/*
		整型中的	0
		浮点类型	0
		字符串  ''空字符串	'0'
		布尔类型	false
		数组类型	空数组	假
		对象	真
		资源	真
		空null	假
	*/
	class a{
		
		
	}
	
	/*
		$res=new a;
		$a=$res;
		var_dump($a);
		$var=fopen('./1.text','r');
		var_dump($var);
		$new=(bool)$var;
		var_dump($new);
		
	*/
	
	$a=null;
	var_dump($a);
	$new=(bool)$a;
	var_dump($new);
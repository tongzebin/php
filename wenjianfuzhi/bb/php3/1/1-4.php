<?php
	//关于查看类型的功能
	/*
		var_dump();该功能:可以直接查看类型和值
		优点:
			可以同时查看类型和值
		缺点:
			类型和值的结果无法接受,后续代码无法使用var_dump打印出来结果
		gettype():该功能获取数据类型
			语法格式:
				新变量=gettype(变量);
			优点:类性可以单独存储
			缺点:不能看到值
	*/
	$name='张三';
	//var_dump($name);
	//echo $name;
	
	$a=gettype($name);
	echo $a;
	
	//echo $name;
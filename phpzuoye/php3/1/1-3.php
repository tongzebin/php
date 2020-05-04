<?php
	/*
		$res="www.baidu.com";
		var_dump($res);
	*/
	//打开php程序之外的东西就是资源
	//打开一个文件
	//fopen中的第一个参数是要打开的文件,第二个参数打开的方式
	//r表示只读方式打开
	$res=fopen('./1.txt','r');
	var_dump($res);//resource
	
	//null	空
	//能得到空的情况
	//把null(空)直接赋值给变量,这时候变量的类型就是空
	$null=null;
	var_dump($null);
	//未声明的变量,直接打印输出的类型也是null
	var_dump($name);
	
	//被销毁的变量也是null
	//unset(变量名)	销毁一个变量
	
	$age=12;
	unset($age);
	var_dump($age);
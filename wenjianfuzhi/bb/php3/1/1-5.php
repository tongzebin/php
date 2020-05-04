<?php
	/*
		变量类型之间的转换
			1.强制类型转换:通过给变量加指定的类型名称
				语法格式:
					(类型)变量
						类型:int float bool string...
						
						资源和null
			2.自动类型转换:php是弱类型语言,所有类型可以自动转换
	*/
	$a=999;
	//把int类型的变量a强制转换成布尔类型
	//转换布尔类型的时候,只有0被强制转换后会变成false
	//$a=(bool)$a;
	//$a=(float)$a;
	$a='askjah';
	$a=(int)$a;//0
	$a='1234';
	$a='1231a';
	$a='1a13s';
	var_dump($a);
	$a=(array)$a;
	var_dump($a);
	
	//自动类型转换(就是根据不同的环境,变量发生的自动类型转换的现象)
	
	$a=1+1;
	$a='1'+1;//int 2 这个时候前边的字符串的1 会发生自动类型转换,转换成int类型的1和后后边的1去相加
	$a='a'+1;//int 1
	$a='a2'+1;//int 1
	$a='2a'+3;//int 5
	$a='2a2'+1;//int 3
	$a='abc'+'abc';//0
	$a='8.8'+2;//float 10.8
	$a='2e2'+3;//float 203
	var_dump($a);
	if(3>2){
		echo 'ok';
	}else{
		echo 'no';
	}
	
	$n=0;
	$n=(bool)$n;
	var_dump($n);
<?php
	//赋值运算符	=
	//注意:在php程序中 一个=表示的是赋值关系(把等号右侧的赋值给左侧)
	
	$num=10;
	$a='张三';
	echo "<br/>";
	$num=5;
	$num+=10;
	echo $num;
	
	$num=10;
	$num-=5;
	echo $num;
	
	//乘法赋值运算符
	$num=10;
	$num*=4;
	echo $num;
	
	//除法赋值运算符
	$num=9;
	$num/=3;
	echo $num;
	
	//取余赋值运算符
	$num=9;
	$num%=4;
	echo $num;
	
	$str2='奥斯卡;塑料袋';
	$str3='爱你哦熬时间爱上李金';
	$str4=$str2.$str3;
	echo $str4;
	
	
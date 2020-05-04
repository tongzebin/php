<?php
	/*
		数学函数:
	*/
	//abs(); 绝对值 	负的数正的,正的还是正的
	$n=3.14;
	var_dump(abs($n));
	
	//ceil	进一法取整
	$num=3.00000001;
	$res=ceil($num);
	var_dump($res);
	
	//round 四舍五入
	/*
		参数1:要四舍五入
		参数2:(可选参数)保留几位小数
	*/
	$num=3.654;
	$res=round($num,2);
	var_dump($res);
	
	//floor 	舍去法求整
	
	$num=3.111;
	$res=floor($num);
	var_dump($res);
	
	//max 最大值
	$res=max(10,20,30);
	var_dump($res);
	$res=min(0,'asd');
	//如果是0和非零整数类型比较的时候,谁在前,谁就是哪个小值
	var_dump($res);
	
	//mt_rand 	更好的随机数
	$res=mt_rand(10,100);
	var_dump($res);
	
	$res=rand(10,641);
	var_dump($res);
	
	//pi() 的到圆周率
	
	$res=pi();
	var_dump($res);
	
	//pow(x,y)  x的y次方
	$num=pow(10,3);
	var_dump($num);
	
	$num=pow(1024,558);
	var_dump($num);
	
	/*
		存储单位
			1024b=1kb;
			1024kb=1MB;
			1024MB=1GB;
			1024GB=1TB;
			1024TB=1PB;
			1024PB=1EB;
	*/
	
	
	
	
	
	
	
	
	
	
	
	
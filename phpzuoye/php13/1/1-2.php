<?php
	//ascii 就是一个标准,吧每个字符与0-255数字对应起来,这样就可以字符变成是数字也可以变成其他的进制
	//chr 	给出一个ASCII值,返回所对的对象
	
	$str=chr(23);
	$str=chr(434);
	var_dump($str);
	
	//ord	返回一个字符的ASCI值
	$str=ord('w');
	var_dump($str);
	
	/*
		0-9  48-57
		a-z	 97-122
		A-Z	 65-90
	*/
	
	$str="dfghjkldfghjkl;dfghjkl;fdxfcg";
	//如果吸纳要字符串中的一个字符,语法格式 $str{0};
	
	//获取字符串的长度	strlen();
	
	$n=strlen($str);
	var_dump($n);
	
	//echo $str{0};//$str{1};读取字符串中的值得时候建议使用{}
	
	
	for($i=0;$i<$n;$i++){
		echo $str{$i};
		
	}
	
	//得到最后一字符		
	echo $str{$n-1};
	
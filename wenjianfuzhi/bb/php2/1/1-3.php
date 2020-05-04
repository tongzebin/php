<?php 
	/*
		php中的所有数据类型
			总共分为3大类
				标量(4种)
					整形 int	(0123456789)
					浮点型	float 	带小数的
					字符串	string    汉字,字母
					布尔类型	boolean 	这种类型的有两个值 true false
				复合类型:(2种)
					数组	array
					对象	object
				特殊类型(2种)
					资源
					null
	 */
	 /*
		浮点类型:float
			什么是浮点类型
				就是小学学的小数分数
			方式一直接给变量赋值小数
				例如:$float=1.2	$float=3.14
			方式2:科学计数法声明浮点类型值
				例如:$float=3.14e2
					表示的是3.14*10的2次方
	 */
	 //方式1
		$float=1.2;
	var_dump($float);
	$float=3.14;
	var_dump($float);	
	//方式2
	$floa=3e3;
	var_dump($float);
	$float=3.14e2;
	var_dump($float);
	$float=3.14e-2;
	var_dump($float);
 ?>
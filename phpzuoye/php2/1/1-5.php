<?php
	/*
		php中的所有数据类型
			总共分为3大类
				标量(4种)
					整型 int	0123456789
					浮点型	float	带小数点的
					字符串	string	汉字,字母
					布尔类型	boolean	这种类型有两个值	true	false
				符合类型(2种)
					数组	array
					对象	object
				特殊类型(2种)
					资源
					null
	*/
	/*
		解析转义字符的能力
			\n	换行
			\r	回车
			\t	tab键
		单引号:不能解析转义字符,但是可以解析\(转义斜线:就是让具有功能的字符变成没功能,让没功能的变成有功能的)
				还可以解析单引号(本身)
		双引号:可以解析转义字符
		
		注意事项:
			单引号不能嵌套单引号,双引号不能嵌套双引号
	*/
	//str='a'abc;
	//$str='在我年轻的时候喜欢上了一打撒卡拉胶';
	
	$str="asa声明艾\t萨拉拉伸\膜啊.'t吗三大类";
	echo $str;
	
	//在声明字符串的时候,建议使用单引号!!
	//单引号的效率要比双引号高
	
	/*
		解析变量的能力
			单引号:不能解析变量
				如果强行让单引号解析变量,可以使用英文状态下的 . 作变量连接
			双引号:可以解析变量
				在双引号中使用变量,建议使用变量,建议使用大括号将变量括起来,就是让双引号中的变量一变量方式去解析\
				
	*/
	
	echo "<hr/>";
	$str='安会计师';
	echo $str;
	
	/*
		我们到底什么时候是用什么符号;
			1.能用单引号的时候就用单引号	(效率高)
			2.sql语句建议使用双引号
			3.文章.或者是大量字符串的时候使用定界符
	
	*/
?>
<?php
	/*
		变量:容器
			可变的量(类似于数学中的未知数)
			
			数学中
				x+y=z
				x=10
				y=50
				z=x+y
				
			这个里边的xyz就是变量(它们的值不确定,它们的值是什么取决于=后边赋值什么值)
			
			x=12;
			y=20;
			x=30;
			
			php中的语法变量语法格式
				$变量名=值
	*/
	
	$x=10;
	$y=20;
	$z=$x+$y;
	echo $z;
	$name="张三";
	echo $name;
	echo "aosijasnoashoaslscsnca;occncnssndksnxkccknxcnxxkkxc";
	echo "aosijasnoashoaslscsnca;occncnssndksnxkccknxcnxxkkxc";
	echo "aosijasnoashoaslscsnca;occncnssndksnxkccknxcnxxkkxc";
	echo "aosijasnoashoaslscsnca;occncnssndksnxkccknxcnxxkkxc";
	echo "<hr/>";
	$str="sailshjalsknlaknkansclkl;odolscl;bcbcbcxlkcnknc";
	echo $str;
	echo $str;
	echo $str;
	
	/*
		变量的命名规则
			1:声明php变量的时候必须要用$开始
			2.php变量名可以使用中文.但不建议使用中文(老瓦发明的)
			3.可以使数字.字母.下划线(但是不能是纯数字.也不能是数字开头)
			4.不能使用特殊符号(_除外)
			5.严格区分大小写
			6.不建议使用系统关键字
			7.见名知意
			
			
	*/
	
	
	
	$小翠翠="iloveyou";
	echo $小翠翠;
	echo "<hr/>";
	$_="maask";
	echo $_;
	echo "<hr/>";
	$NAME="ZS";
	echo $NAME;
	echo "<hr/>";
	$age=18;
	$age=30;
	echo $age;
	
	$age=60;
	echo $age;
	
	/*注意:如果在后边定义相同的变量的值会被后边的变量值覆盖*/
	
	$echo="askjh";
	echo $echo;
	
?>
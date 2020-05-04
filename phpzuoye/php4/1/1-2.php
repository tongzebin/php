<?php
	/*
		运算符:	+ - * / % ++ --
			什么是运算符:
				用于运算的符号就是运算符
	*/
	$n=10;
	$m=20;
	$res=$n+$m;
	echo $res;
	
	//面试题
	
	$res=1+2+3+"4+5";
	echo "<br/>";
	echo $res;//10
	
	/*
		$str="3+4+5"
		$str2=(int)$str;
		echo $str2;
	*/
	
	//减法
	$res=10-4;
	echo $res;
	
	//乘法
	$res=3*4;
	echo $res;
	
	//除法
	$res=10/3;
	echo $res;
	
	//取余
	$res=10%3;
	echo $res;
	
	/*
		++   	自身+1	(自增:在原有的变量基础上+1)
		--		自身-1	(自减:在原有的变量基础上-1)
	*/
	$num=10;
	$num++;
	var_dump($num);
	
	$num=10;
	$num--;
	var_dump($num);
	
	$num=10;
	--$num;
	var_dump($num);
	
	$num=10;
	++$num;
	var_dump($num);
	
	echo "<hr/>";
	$num=4;
	echo $num++;	//4
	echo "<hr/>";//如果++在变量后 先赋值 再运算
	echo $num;
	
	echo "<hr/>";
	$num=4;
	echo ++$num;	//5
	echo "<hr/>";//如果--在变量前,先运算 再赋值
	echo $num;
	
	echo "<hr/>";
	//浮点类型的自增运算
	$num=3.14;
	$num++;
	echo $num;
	echo "<hr/>";
	$str="aaa";
	$str++;
	var_dump($str);
	
	//面试题
	echo "<hr/>";
	$a=10;
	$res=$a++ + ++$a;
	echo $a++;//12
	echo ++$a;//14
	echo $res;//22
	
	echo "<br/>";
	$a=15;
	$b=10;
	
	// 15
	//a=16;
	//15 + 10
	$c=$a++ + $b++;
	echo $a;
	echo $b;
	echo $c;
	
	/*
		$c=25 $a=16 $d=42
	*/
	
	echo '<br/>';
	$d=$c-- + ++$a;
	echo $d;//42
	
	echo "<br/>";
	$e=--$d + $b;
	echo $e;
	echo "<br/>";
	
	$f=$e++ + $c++;
	echo $f;//54
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
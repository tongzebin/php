<?php
	//声明变量
	$name="张三";
	echo $name;
	//name会被重新赋值
	$name="李市";
	echo $name;
	/*
		代码执行完毕后,变量会自动销毁
	*/
	/*
		什么是可变变量??
			1可以变化的量
				可变变量只是变量的一种,可以在开头连续加$
					理论来说,前边的$可以无限加,但是实际使用中使用两个即可
				就是把变量即系后,变成只在$这个值,然后变量就会发生变化
	*/
	//声明一个变量
	$zhangsan="meizi";
	//声明变量
	$meizi="mylove";
	$mylove="小翠翠";
	echo $$$zhangsan;
	echo "<hr/>";
	/*
		引用,不同的变量名访问同一个变量值,称为引用,&
	*/
	//普通变量赋值
	$left="脉动";
	$right=$left;
	echo $left;
	echo $right;
	echo "<hr/>";
	//改变left变量的值
	$left="红牛";
	echo $left;//红牛
	echo $right;//脉动
	echo "<hr/>";
	
	$left="敌敌畏";
	$right=&$left;
	
	echo $left;//敌敌畏
	echo $right;//敌敌畏
	
	//尝试改变left中的值
	//$left="可乐";
	//尝试改变right中的值
	$right="可乐";
	
	echo "<hr/>";
	echo $left;
	echo $right;
	



?>
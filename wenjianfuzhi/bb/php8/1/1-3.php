<?php
	/*
		函数:功能(具有指定的代码,还有名字)
		函数分为:
			系统函数
				is_float() isset() empty() mt_rand()
			自定义函数
			学习函数的三点:
				函数的定义:(语法格式)
				函数的参考:(给功能提供条件)
				函数的返回值:(函数的执行结果)
			自定义函数的语法格式:
				[]不是函数语法格式的一部分,[]只是表示可有可无
				function 函数名([参数1][参数2]){
					函数体(实现函数功能的代码)
				}
			函数的特点:不调用,不执行!!!
			
			注意:函数的调用不分先后顺序,函数在程序做语法扫描的时候就存储到内纯中了
			在代码执行的时候,看不到调用函数的代码的时候,直接将函数执行
			
		函数的命名规则:
			1.函数在定义的时候,使用function,不能省略
			2.可以使用英文,但是不能使用中文
			3.可以使用数字,但是不能数字开头
			4.不能使用特殊符号,但是下划线可以
			5.见名知意
			6.不能使用系统关键字
			7.函数名不区分大小写
			8.不可以使用系统关键字
			9.函数名不能重名
	*/
	fun();
	//定义一个函数
	function fun(){
		echo '函数';
	}
	//调用函数
	//函数名();
	
	//fun();
	//函数是可以多次调用的
	//fun();
	
	//var_dump();
	//var_dump();
	
	//function fun(){
	//	echo '就会改变';
	//}
	//fun();
	
	
	//错误示范
	//function isset(){
	//	echo '123';
	//}
	
	
	
	
	
	
	
	
	
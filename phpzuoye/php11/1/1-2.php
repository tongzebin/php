<?php
	/*
		匿名函数:就是没有名字的函数
			语法格式:
				变量=function(){
					php代码
				};	注意!!!必须加分号
				
				调用匿名函数  变量名();
	*/
	$fun1=function(){echo '匿名函数';};
	//$fun();
	/*回调函数*/
	$fun1();
	function fun($a){
		$a();
		echo '<hr/>匿名函数2';
	}
	
	//fun('fun2');
	fun(function(){echo '我是通过函数参数传进去的函数';});
	//function fun2(){
		//echo '哦哈女吧';
	//}
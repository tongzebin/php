<?php
	/*
		一个函数中可以有多个return
		
	*/
	function fun(){
		if(13>4){
			return '奥斯卡计划';
			echo '傲视科技';
		}else{
			return '么么哒';
		}
	}
	echo fun();
	
	/*
		系统中关于函数的函数
		function_exists() 判断一个函数是否存在
		如果存在返回true
		如果不存在返回false
	*/
	var_dump(function_exists('fun1'));
	function fun2($a,$b){
		if($a>$b){
			return true;
		}else{
			return false;
		}			
	}
	var_dump(fun(100,20));
	
	
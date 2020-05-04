<?php
	/*
		学习函数的3点:
			函数的定义
			函数的参数
			函数的返回值
		函数的返回值
			语法结构
				在函数内部将函数的执行结果返回到调用处,需要用到的关键字是
				return(返回)!!!!!!!!
	*/
	function demo(){
		$str='华傻不拉几';
		$str.='分工会尽快12';
		$str.='566alshk';
		//echo $str;
	}
	//$str=demo();
	//var_dump(demo());
	echo demo();
	function qw(){
		echo '奥拉克那是领导们';
		$shui='水';
		//echo $shui;
		//return 后边放什么数据,就把什么数据返回到调用处
		return $shui;
	}
	echo qw();
	echo '<hr/>';
	function num(){
		echo 3+5;
		//return 3+5;
	}
	echo num()+2;
	echo '<hr/>';
	
	function num2($a,$b){
		return $a+$b;
	}
	echo num2(10,20)+30;
	echo '<hr/>';
	echo num2(40,50);
	/*
		 echo和return的区别
			echo 如果在函数的内部,仅仅只是将结果说出来,但是没给我(没给调用处)
			return 不说!!但是将函数的执行结果返回给我(调用处)
	*/
	
	function fun6(){
		return '暗示健康和';
	}
	echo fun6();
	
	echo '<hr/>';
	function fun7(){
		echo '案件施工';
		return '按有关环境';
		echo '奥斯卡计划';
	}
	echo fun7();
	function num6(){
		$a=4+6;
		return $a;
		//!!!!!!!!!!!return 后边不能书写任何代码,书写也不执行
		echo 3+4;
	}
	echo num6();
	
	echo '<hr/>';
	function num8(){
		echo '买水';
		return '水';
	}
	echo num8();
	echo num8();
	echo '<hr/>';
	
	function dongxi($dongxi){
		echo '买东西';
		return $dongxi;
	}
	echo dongxi('水');
	echo dongxi('面包');
	
	
	
	
	
	
	
	
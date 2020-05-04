<?php
	/*
		变量的作用域:
			由于函数的出现,导致变量的作用域发生了变化
		变量作用域分为:
			普通变量:在函数外部声明的变量
				特点:其作用范围就是当前页面部分,但是在函数内部无法使用
				例如:
					$a=10,这个变量就是普通变量
					function fun(){
						echo $a;无法使用函数外部声明的变量$a
					}
			局部变量:在函数内部声明的变量
				特点:只能在函数内部使用
				例如:
					function fun2(){
						$name='list';
						echo $name;  可以使用
					}
					echo $name 不可以使用 因为$name是局部变量
			全局变量:
				在函数外部有一个变量
				在函数内部也有一个相同的名字的变量
				在函数内部的相同名字的变量前使用global关键字来修饰里边的变量
					这时候被修饰的变量就变成了全局变量
				特点:在函数内部和外部都可以使用
				超全局变量
					$_POST
					$_GET
					$_COOKIE
					$_SESSION
					$GLOBALS
					
	*/
	
	
	// $a=10;
	// function fun(){
		// echo $a;
	// }
	// fun();
	
	echo '<hr/>';
	$name="呜呜";
	echo '函数外'.$name.'<br/>';
	echo '<hr/>';
	$name='赵四';
	function fun3(){
		global $name;
		$name="亚洲舞王";
		echo '函数内部'.$name.'<br/>';
		
	}
	echo '我是在函数外部使用的变量'.$name.'<br/>';
	fun3();
	echo '<br/>';
	echo $name;
	
	/*
		全局变量2
		$GLOBALS:一个包含全部变量的全局数组;
	*/
	
	$age=19;
	$_GET['bac']='abc';	
	$user1='张三';
	$user2='李市';
	$user3='王五';
	function fun5(){
		echo $GLOBALS['user1'];
		echo $GLOBALS['user2'];
		echo $GLOBALS['user3'];
	}
	echo $user1;
	echo $GLOBALS['user1'];
	
	fun5();
	
	$arr=array(1,2,3,4);
	var_dump($arr);
	
	
<?php
	/*
		内部函数
			在函数内部声明的函数就是内部函数
				1,在函数外可以调用内部函数吗?
					不可以直接调用,调用完外部函数后就可以调用内部函数了
				2,在函数内部函数可以使用内部函数吗?
					可以使用,但是外边的函数必须使用
						注意:在函数内部调用内部函数的时候,必须先定义函数,在调用函数
						内部函数的作用:内部函数就是帮助外部函数,完成部分功能
						
					语法结构:
						function 函数名(){
							function 函数名(){
								
							}
							function 函数名(){
								
							}
						}
						
						
	*/
	
	
	$php=100;
	$java=88;
	$ui=66;
	function demo(){
		function php($php){
			if($php>=0){
				return '及格';
			}else{
				return '不及格';
			}
		}
		function java($java){
			if($java){
				return '及格';
				
			}else{
				return '不及格';
			}
		}
		function ui($ui){
			if($ui>=60){
				return '及格';
			}else{
				return '不及格';
			}
			
		}
	}
	
	demo();
	$z=$php+$java+$ui;
	$p=$z/3;
	echo '您的php成绩是'.$php.'分'.php($php).'<br/>';
	echo '您的java成绩是'.$java.'分'.java($java).'<br/>';
	echo '您的ui成绩是'.$ui.'分'.ui($ui).'<br/>';
	echo '您的总成绩是'.$z.'分';
	echo '您的平均成绩是'.$p.'分';
	
	
	
<?php
	$php=100;
	$java=99;
	$ui=88;
	function fun(){
		function php($php){
			if($php>=60){
				return '及格';
			}else{
				return '不及格';
			}
		}
		function java($java){
			if($java>=60){
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
	fun();
	$z=$ui+$php+$java;
	$p=$z/3;
	echo '您的php成绩是'.$php.php($php).'<br/>';
	echo '您的java成绩是'.$java.java($java).'<br/>';
	echo '您的ui成绩是'.$ui.ui($ui).'<br/>';
	echo '您的总成绩是'.$z;
	echo '您的平均成绩是'.$p;
	
	
	
	
	
	
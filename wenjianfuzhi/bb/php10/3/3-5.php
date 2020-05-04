<?php
	$php=100;
	$java=100;
	$ui=100;
	
	function men(){
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
	
	men();
	$z=$php+$java+$ui;
	$p=$z/3;
	echo '您的php成绩是'.$php.php($php).'<br/>';
	echo '您的java成绩是'.$java.java($java).'<br/>';
	echo '您的ui成绩是'.$ui.ui($ui).'<br/>';
	echo '您的总成绩是'.$z;
	echo '您的平均成绩是'.$p;
	
	
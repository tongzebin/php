<?php
	$a=true;
	$b=true;
	$c=false;
	if($a){
		echo '大门是打开的';
		if($b){
			echo '进入教室,准备学习';
			if($c){
				echo '打开电脑,敲代码img';
			}else{
				echo '教室没有电,去网吧学php';
			}
		}else{
			echo '教室门没开,准备去上网';
		}
	}else{
		echo '大门是关着的,去上网吧';
	}
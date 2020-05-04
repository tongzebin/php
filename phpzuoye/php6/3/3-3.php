<?php
	$a=true;
	$b=true;
	$c=false;
	
	if($a){
		echo "大门打开了,走到电梯旁";
		if($b){
			echo '电梯下来了,上到四楼';
			if($c){
				echo '教室门开了,去学习';
			}else{
				echo '教室门没开,去上网';
			}
		}else{
			echo '电梯坏了,去上网';
		}
	}else{
		echo '大门没打开,我上网去了';
	}
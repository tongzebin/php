<?php
	/*
		巢状分支结构
			就是在分支里边使用分支结构的语法格式就是巢状分支
			
			语法格式
				if(表达式){
					if(表达式){
						
					}else{
						
					}
				}else{
					if(){
						
					}else{
						
					}
				}
	*/
	$a=true;
	$b=true;
	$c=false;
	if($a){
		echo '打开大门';
		if($b){
			echo '打开小门';
			if($c){
				echo '我进来了';
			}else{
				echo '去上网,爽歪歪';
			}
		}else{
			echo '没打开小门,回家睡觉';
		}
	}else{
		echo '回家睡觉';
	}
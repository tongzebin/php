<?php
	/*
		break
			可以在switch中使用,跳出当前switch
			还可在循环重视用,特点跳出当前循环
			break;
			break 2;终止两层循环
			continue
	*/
	for($i=0;$i<=10;$i++){
		if($i==4){
			break;
		}
		echo $i.'<br/>';
	}
	
	for($i=1;$i<=10;$i++){
		for($j=1;$j<=10;$j++){
			if($i==4){
				break 2;
			}
			echo $j;
		}
		echo '<br/>';
	}
	
	for($i=0;$i<=10;$i++){
		if($i==4){
			continue;//终止本次循环,继续下一次循环
		}
		echo $i.'<br/>';
	}
	
	
	
	
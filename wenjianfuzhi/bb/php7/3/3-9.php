<?php
	for($i=0;$i<=10;$i++){
		if($i==4){
			continue;
		}
		echo $i.'<br>';
	}
	for($i=1;$i<=10;$i++){
		for($j=1;$j<=10;$j++){
			if($j==4){
				continue;
			}
			echo $j;
		}
		echo '<br/>';
	}
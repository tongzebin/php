<?php

	function sum($n,$m){
		for($i=$n;$i<=$m;$i++){
			echo $i.'<br/>';
		}
	}
	sum(1,10);
	
	function num($n,$m){
		$sum=0;
		for($i=$n;$i<=$m;$i++){
			$sum+=$i;
		}
		echo $sum;
	}
	num(20,50);
	
	function bg($n,$m){
		echo '<table border="1" width="400">';
		for($i=1;$i<=$n;$i++){
			echo '<tr>';
				for($j=1;$j<=$m;$j++){
					echo '<td>1</td>';
				}
			echo '</tr>';
		}
	}
	bg(10,10);
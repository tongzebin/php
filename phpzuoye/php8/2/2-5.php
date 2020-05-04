<?php
	function num($n,$m){
		for($i=$n;$i<=$m;$i++){
			echo $i.' ';
		}
	}
	num(5,20);
	echo '<hr/>';
	function num1($n,$m){
		$sum=0;
		for($i=$n;$i<=$m;$i++){
			$sum+=$i;
		}
		echo $n.'到'.$m.'的和为'.$sum;
	}
	num1(5,20);
	function bg($n,$m){
		echo '<table border="1" width="300">';
		for($i=1;$i<=$n;$i++){
			echo '<tr>';
				for($j=1;$j<=$m;$j++){
					echo '<td>1</td>';
				}
			echo '</tr>';
		}
	}
	bg(8,8);
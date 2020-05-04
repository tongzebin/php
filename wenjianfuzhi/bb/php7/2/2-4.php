<?php
	$j=1;
	while($j<=10){
		echo $j;
		$j++;
	}
	echo '<hr/>';
	$i=11;
	do{
		echo $i;
		$i++;
		
	}while($i<=10);
		
	$sum=0;
	$i<=0;
	do{
		$sum+=$i;
		$i++;
	}while($i<=100);
		echo $sum;
	
	echo '<table border="1" width="500">';
		$tr=1;
		do{
			$bgcolor=$tr%2==0?'red':'blue';
			echo "<tr bgcolor={$bgcolor}>";
			$td=1;
			do{
				echo "<td>{$td}</td>";
				$td++;
			}while($td<=10);
		echo '</tr>';
	$tr++;
	}while($tr<=10);
		echo "</table>";
<?php 
	for ($i=1;$i<=10;$i++) { 
		for($j=1;$j<=10;$j++){
			echo ' * ';
		}
		echo '<br/>';
	}
	echo '<hr/>';
	
	for($j=1;$j<=7;$j++){
		for($i=1;$i<=$j;$i++){
			echo $i.'x'.$j.'='.$j*$i;
		}
		echo '<br/>';
	}
	echo '<hr/>';
	
	echo '<table border="1" width="700">';
	for($i=1;$i<=9;$i++){
		echo '<tr>';
		for($j=1;$j<=$i;$j++){
			echo "<td>{$j}*{$i}=".($i*$j)."</td>";
		}
		echo '<br/>';
	}
	echo "</table>";
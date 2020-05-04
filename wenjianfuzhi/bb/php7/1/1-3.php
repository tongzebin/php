<?php
	//两层循环
	//**********
	
	//$j=1;
	//while($j<=13){
//		$i=1;
	//	while($i<=5){
	//		echo '*';
	//		$i++;
	//	}
	//	echo '<hr/>';
	//	$j++;
	//}
	
	echo '<table width="600" border="1">';
	$tr=1;
	while($tr<=10){
		echo "<tr>";
		$td=1;
		while($td<=10){
		echo "<td>{$td}</td>";
		$td++;
		}
		echo "</tr>";
		$tr++;
	}
	echo "</table>";
	

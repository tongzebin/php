<?php
	echo "<table border=1 cellpadding=10> ";
//	$a=1;
//	while($a<=10){
//		echo "<tr>";
//		$b=1;
//		while($b<=10){
//			echo '<td></td>';
//			$b++;
//		}
//		$a++;
//		echo "</tr>";
//	}
	
	
	
	
	
	

	
	for($a=1;$a<=9;$a++){
		$bgc=$a%2==0?'red':'blue';
		echo "<tr >";
		for($b=1;$b<=$a;$b++){
			echo '<td>';
				echo $b.'X'.$a.'='.$a*$b;
			echo '</td>';
		}
		echo "</tr>";
	}
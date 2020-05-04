<?php
	for($j=1;$j<=10;$j++){
		for($i=1;$i<=10;$i++){
			echo '*';
		}
		echo '<br/>';
	}
	
	for($j=1;$j<=8;$j++){
		for($i=1;$i<=$j;$i++){
			echo '*';
		}
		echo "<br/>";
	}
	
	for($j=1;$j<=9;$j++){
		for($i=1;$i<=$j;$i++){
			echo $i.'X'.$j.'='.$j*$i;
		}
		echo '<br/>';
	}
	
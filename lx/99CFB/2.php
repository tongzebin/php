<?php
echo "<table border=1 cellpadding=10> ";
for($a=9;$a>=1;$a--){
		$bgc=$a%2==0?'red':'blue';
		echo "<tr >";
		for($b=1;$b<=$a;$b++){
			echo '<td>';
				echo $b.'X'.$a.'='.$a*$b;
			echo '</td>';
		}
		echo "</tr>";
	}
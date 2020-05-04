<?php
echo "<table border=1 cellpadding=10> ";
for($a=1;$a<=9;$a++){
		echo "<tr >";
		for($i=1;$i<=9-$a;$i++){
				echo '<td></td>';
			}
		for($b=1;$b<=$a;$b++){
			
			echo "<td>".$a.'X'.$b.'='.$a*$b."</td>";
		}
		echo "</tr>";
	}
<?php
	echo "<table border=1 cellpadding=10> ";
	for($a=1;$a<=9;$a++){
			echo "<tr >";	
				for($j=1;$j<=9-$a;$j++){
					for($q=1;$q<=4;$q++){
						echo '&nbsp;';
					}
			}
			for($b=$a;$b>=1;$b--){
				echo "<td>".$b.'X'.$a.'='.$a*$b."</td>";
			}
			echo "</tr>";
		}
	
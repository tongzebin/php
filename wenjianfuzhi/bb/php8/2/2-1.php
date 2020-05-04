<?php
	echo "<table border='1' width='600'>";
	for($i=1;$i<=7;$i++){
		echo '<tr>';
			for($j=1;$j<=7;$j++){
				echo '<td style="background:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$j.'</td>';
			}
		echo '</tr>';
	}
	echo '</table>';
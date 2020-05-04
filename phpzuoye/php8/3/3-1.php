<?php
	echo '<table border="1" width="400">';
	for($i=1;$i<=8;$i++){
		echo '<tr>';
			for($j=1;$j<=8;$j++){
				echo '<td style="background:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$j.'</td>';
			}
		echo '</tr>';
	}
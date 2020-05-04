<?php
	echo '3位数的水仙花数有:';
	for($i=100;$i<=999;$i++){
		 $a=$i%10;
		 $b=intval($i/10)%10;
		 $c=intval($i/100)%10;
		if(($a*$a*$a)+($b*$b*$b)+($c*$c*$c)==$i){
			echo $i.' &nbsp';
		}
	}
		
	
<?php
	for($a=1;$a<100;$a++){
		for($b=1;$b<100;$b++){
			for($c=1;$c<100;$c++){
				if($a+$b+$c*3==100&&$a*5+$b*3+$c==100){
					echo $a.'<br/>'.$b.'<br/>'.($c*3)."<br>";
				}
			}
		}
	}
		

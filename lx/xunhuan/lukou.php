<?php
	$max=100000;
	$count=0;
	while($max>=5000){
		if($max>50000){
			$max-=($max*0.05);
			$count++;
		}else{
			$max-=5000;
			$count++;
			var_dump($max);
		}
	}echo '可以经过'.$count.'次路口';
	
	
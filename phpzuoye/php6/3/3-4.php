<?php
	$i=1;
	$sum=0;
	while($i<=100){
		$sum+=$i;
		$i++;
	}echo $sum.'<br/>';
	$i=0;
	$sum=0;
	while($i<=100){
		if($i%2==0){
			$sum+=$i;
		}
		$i++;
	}
	echo $sum;
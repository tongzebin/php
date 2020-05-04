<?php
	$i=1;
	$sum=0;
	while($i<=100){
		$sum+=$i;
		$i++;
	}
	$i=1;
	while($i<=100){
		if($i%2==0){
			echo $i;
		}
		$i++;
	}
	
	$i=0;
	$sum=0;
	while($i<=10){
		if($i%2==0){
			$sum+=$i;
		}
		$i++;
	}echo $sum;
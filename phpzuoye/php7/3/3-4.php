<?php
	$j=1;
	while($j<=10){
		echo $j;
		$j++;
	}
	echo '<hr/>';
	$i=11;
	do{
		echo $i;
		$i++;
	}while($i<=10);
	$sum=0;
	$i=1;
	do{
		$sum+=$i;
		$i++;
	}while($i<=100);
	echo $sum;
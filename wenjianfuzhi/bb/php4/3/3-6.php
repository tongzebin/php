<?php
	$n=3>4;
	$m=3>1;
	$res=$n && $m;
	var_dump($res);
	$n=3>2;
	$m=21<12;
	$res=$n||$m;
	var_dump($res);
	
	$a=false;
	$m=false;
	$res=($n xor $m);
	var_dump($res);
	
	$a=3>2;
	$b=12>13;
	$c=12>1278;
	if($c && $b && $a){
		echo 's';
	}else{
		echo 'a';
	}
	echo '<hr/>';
	$a=3;$b=2;
	if(($a=0)&&($b=2)){
		$a++;
		$b++;
	}
	echo $a;
	echo $b;
	
	$n=2;
	$m=5;
	if(($n=1)||($m=2)){
		$n++;
		$m++;
		
	}
	echo $n;
	echo $m;
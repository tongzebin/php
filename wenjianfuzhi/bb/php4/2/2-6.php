<?php
	$n=3>4;
	$m=4<3;
	$res=$n && $m;
	var_dump($res);
	
	$n=3>2;
	$m=12<12;
	$res=$n||$m;
	var_dump($res);
	$a=false;
	$res=!!$a;
	var_dump($res);
	$n=false;
	$m=false;
	$res=($n xor $m);
	var_dump($res);
	
	$a=3>2;
	$b=12<3;
	$c=123>3423;
	if($c && $a && $b){
		echo 'mz';
	}else{
		echo 'bmz';
	}
	echo '<br/>';
	$a=3;
	$b=2;
	if(($a =0)&&($b=5)){
		$a++;
		$b++;
	}
	echo $a.'<br/>';
	echo $b.'<br/>';
	
	$n=3;
	$m=4;
	if(($n=0)||($m=5)){
		$n++;
		$m++;
	}
	echo $n.'<br/>';
	echo $m.'<br/>';
	
	
	
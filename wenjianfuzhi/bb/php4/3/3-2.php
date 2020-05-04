<?php
	$n=10;
	$m=20;
	$res=$n+$m;
	echo $res;
	$res=1+2+'3+4+5';
	
	echo '<br/>';
	echo $res;
	
	$res=12-2;
	echo $res;
	
	$res=2*2;
	echo $res;
	
	$res=342/12;
	echo $res;
	
	echo '<br/>';
	
	$num=3.14;
	$num++;
	echo $num;
	echo '<hr/>';
	
	$num=4;
	echo ++$num;
	echo $num;
	$a=10;
	$res=$a++ + ++$a;
	echo ++$a;
	echo $a++;
	echo $res;
	
	
	echo '<br/>';
	$a=12;$b=12;
	$c=$a++ +$b++;
	echo $a;
	echo $b;
	echo $c;
	
	echo '<br/>';
	$d=$c-- + ++$a;
	echo $d;
	
	$e=--$d - $b;
	echo $e;
	
	$f=$e++ + $c++;
	echo $f;
	
	
	
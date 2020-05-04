<?php
	$n=10;
	$m=20;
	$res=$n+$m;
	echo $res;
	
	//面试题
	$res=1+2+'3+4+5';
	echo '<br/>';
	echo $res;
	
	$res=10-4;
	echo $res;
	
	$res=2*2;
	echo $res;
	
	$res=10/2;
	echo $res;
	
	echo '<hr/>';
	$num=4;
	echo $num++;
	echo '<br/>';
	echo $num;
	
	echo '<hr/>';
	$num=3.14;
	$num++;
	echo $num;
	echo '<hr/>';
	
	$num=4;
	echo ++$num;
	echo '<br/>';
	echo $num;
	
	echo '<hr/>';
	
	$a=10;
	$res=$a++ + ++$a;
	echo $a++;
	echo ++$a;
	echo $res;
	
	echo '<br/>';
	$a=12;
	$b=12;
	
	$c=$a++ + $b++;
	echo $a;
	echo $b;
	echo $c;
	
	
	echo '<br/>';
	$d=$c-- + ++$a;
	echo $d;
	
	echo '<br/>';
	$e=--$d - $b;
	echo $e;
	echo '<br/>';
	$f=$e++ + $c++;
	echo $f;

	
	
	
	
<?php
	$a=3>4?'大于':'小于';
	echo $a;
	echo '<hr/>';
	$sex=2;
	$sex=$sex==1?"男":"女";
	echo '性别:'.$sex;
	
	$a=100;
	$b=111;
	$c=$a>$b?$a:$b;
	echo $c;
	
	
	$a=12;
	$b=23;
	$c=12;
	$d=($a>$b?$a:$b)>$c?($a>$b?$a:$b):$c;
	echo 'd大的值'.$d;
	
	echo '<br/>';
	$a=10;
	$b=20;
	echo $a;
	echo $b;
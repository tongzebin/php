<?php
	$a=3>4?'大于':'小于';
	echo $a;
	
	echo '<hr/>';
	$sex=1;
	$sex=$sex==1?'男':'女';
	echo '性别'.$sex;
	
	$a=100;
	$b=200;
	$c=$a>$b?$a:$b;
	echo $c;
	
	$a=123;
	$b=127;
	$c=123;
	$d=($a>$b?$a:$b)>$c?($a>$b?$a:$b):$c;
	echo $d;
	echo "<br/>";
	
	$a=10;
	$b=213;
	echo $a;
	echo $b;
	
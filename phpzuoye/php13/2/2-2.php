<?php
	$str=chr(66);
	var_dump($str);
	
	$str=ord('#');
	var_dump($str);
	
	$str="fghjkll;yctvbnm";
	$n=strlen($str);
	var_dump($n);
	
	for($i=0;$i<strlen($str);$i++){
		echo $str{$i};
	}
	
	echo $str{$n-1};
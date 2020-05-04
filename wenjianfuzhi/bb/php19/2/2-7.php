<?php
	$f=fopen('./aaa.txt','r');
	while($str=fgetc($f)){
		echo $str;
	}
	$str=file_get_contents('./aaa.txt');
	echo $str;
	$a=file('./aaa.txt');
	var_dump($a);
	readfile('./aaa.txt');
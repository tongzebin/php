<?php
	$f=fopen('aaa.txt','a+');
	fwrite($f,'saytgb');
	rewind($f);
	while($str=fread($f,1)){
		echo $str;
	}
	fclose($f);
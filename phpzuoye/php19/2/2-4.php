<?php
	header('content-type:text/html;charset=utf-8');
	$file=fopen('./aaa.txt','r');
	$str='';
	while(!feof($file)){
		$str.=fread($file,1);
	}
	echo $str;
	fclose($file);
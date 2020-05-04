<?php
	$f=fopen("./aaa.txt",'r');
	//fgets()	一次读一行
	//fgetc()	一次读一个
	while($str=fgetc($f)){
		echo $str.'<br>';
	}
	//不需要打开文件
	$str=file_get_contents('aaa.txt');
	
	//file()把整个文件中的内容读取到一个数组中
	$a=file('./aaa.txt');
	var_dump($a);
	readfile('./aaa.txt');
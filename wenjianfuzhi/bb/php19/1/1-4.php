<?php
	//在php代码脚本中如果没有指定字符编码,默认的字符编码是utf-8
	header('content-type:text/html;charset=utf-8');
	/*
		注意在gb字符集系统中一个中文占两个字节
			在utf-8字符集下中文汉字占3个字节
			如果txt文本被设置为utf-8字符集
			改脚本中不需要这只字符集
	*/
	//文件操作
	//fopen(参数1:要打开的文件,参数2.打开方式)
	//r 只读
	$file=fopen('./aaa.txt','r');
	//读取文件	fread(参数1.要读取的文件,每一次读多少)
	//$str=fread($file,2);
	//$str=fread($file,2);
	//$str=fread($file,2);
	//var_dump($str);
	//feof	判断指针是否到结尾
	$str='';
	while(!feof($file)){
		$str.=fread($file,1);
	}
	echo $str;
	fclose($file);
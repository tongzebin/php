<?php
	//定义一个赋值函数
	/*
		t模式	博士的是text mode 文本模式
		b模式	表示的是binary mode 二进制方式
	*/
	function mycopy($file1,$file2){
		$f1=fopen($file1,'r');
		$f2=fopen($file2,'w');
		while($s=fread($f1,1024)){
			fwrite($f2,$s);
		}
		fclose($f1);
		fclose($f2);
	}
	mycopy('a.jpg','b.jpg');
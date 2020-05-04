<?php
	//定义一个复制函数
/*
	t 模式 :表示的是text mode 文本模式
	b 模式 :表示的是 binary mode 二进制方式
*/
	header("content-type:txt/html;charset=utf-8");
	function mycopy($file1,$file2){
		//打开两个文件
		$f1=fopen($file1,"r");
		$f2=fopen($file2,"w");
		while ($s=fread($f1,9)) {
			fwrite($f2,$s);
			
		}
		fclose($f1);
		fclose($f2);
	}


	


	
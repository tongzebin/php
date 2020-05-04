<?php 
	header('content-type:text/html; charset=utf-8');
	//错误抑制符
	echo "appap";
	echo @$a;
	echo 'sja';
	//``反引号	执行系统命令
	//dir是系统命令,查看当前目录的所有文件目录
	//gb2312 汉字编码字符集 (中国大陆中文系统和国际化软件都支持GB2312编码格式)
	//iconv(需要的编码格式 当前的编码格式,系统命令)
	$a=iconv("gb2312","utf-8",`ipconfig`);
	var_dump($a);
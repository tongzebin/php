<?php
	//自定义错误
	//trigger_error();	默认的notice
	//trigger_error('Undefined variable: name');
	//trigger_error('你过来啊',E_USER_SARNING);
	//echo $naem;
	/*
		error_no	错误号
		error_str	错误内容
		error_file	错误文件
		error_line	错误行
	*/
	
	set_error_handler('my_Error');
	function my_Error($error_no,$error_str,$error_file,$error_line){
		echo $error="当前错误号:".$error_no."\n 当前错误内容是".$error_str."\n当前错误文件是:".$error_file."\n当前错误行号是:".$error_line;
		switch($error_no){
			case 2:
				file_put_contents('warning.txt',$error,FILE_APPEND);
				break;
			case 8:
				file_put_contents('notice.txt',$error,FILE_APPEND);
				break;
		}
	}
	function fun($q){
		
	}
	fun();
	echo $name;
	

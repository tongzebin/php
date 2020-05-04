<?php
	/*
		系统中自带的魔术常量(了解)
	*/
	//__FILE__表示当前文件的相对于系统的路径
	echo __FILE__;
	echo "<br/>";
	//	__FILE__  表示当前变量所在行
	
	//	__FUNCTION__	获取系统中的函数名称
	
	//	intval();
	echo "<br/>";
	
	function demo(){
		echo __FUNCTION__;
	}
	demo();
	
	echo "<br/>";
	
	
	echo __LINE__;
	
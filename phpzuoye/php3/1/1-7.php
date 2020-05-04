<?php
	//检测变量的相关系统功能
	/*
		is_int()	检测数据是否是整型
		is_folat	检测数据是否是浮点型
		is_bool()	检测数据是否是布尔型
		is_string	检测数据是否是字符串
		is_array	检测数据是否是数组
		is_resource	检测数据是否是资源
		is_null		检测数据是否为空
		is_numeric	检测数据是否是数字(整型 浮点型 纯数字的字符串)
		is_scalar	检测数据是否是是标量(标量:整型 浮点型 布尔型 字符串)
			如果经常的值满足条件,返回真(true) 否则返回假(false)
	*/
	
	$a=array(1,2,3,4);
	$res=is_scalar($a);
	var_dump($res);
	
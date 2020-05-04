<?php
	/*
		include 文件包含
			作用:相当于将要包含的文件复制到这里
			常用于包含函数,或者是配置文件
			
		语法格式:
			include('路径+文件名');   函数格式
			include '路径+文件名';	指令格式
			
			include('./func.php');
			include '1.php';
			echo fun(12,21);
			
	*/
	/*
		include 和include_once的区别:
			include 可以包含多吃函数
			include_once 只能包含一次,如果多次包含,后边包含的文件就不包含了,返回
			true
			include 和include_once 推荐使用 include 因为include的执行效率高
				因为 include_once需要判断
	*/
	
	/*
		require 请求 需要
			作用:和include相似,将一个文件请求到当前页面
			语法格式:
				require('路径+文件名');
				require '路径+文件名';
			include和 requite的区别:
				include如果判断失败,提示警告(warning级别错误),后续代码正常执行
				require包含文件失败,堡致命错误,后续代码不执行
				不重要的文件(html文件),用 include
				重要的文件(函数),用require
	
	*/
	require ('./11.php');
	echo sum(1,3).'<br/>';
	echo sum(1,2);
	
	
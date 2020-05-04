<?php
	error_reporting("E_ALL && ~E_NOTICE");
	/*
		错误处理
			1.错误的危害
				在项目上线后,尽可能不要让项目出现任何错误
				如果在上线后,出现错误,会有很严重的后果
					懂技术的
						通过网站的错误信息,找到漏洞-植入广告-用户访问网站-广告
			2.认识错误
				语法错误:代码格式打错,没有分号,括号没结束
					好找
					特点:整个代码不执行了
					例如
						echo aaa
						echo bbb
				运行时错误
					提示级别.notice(不影响后续代码执行)
						输出一个没有定义的变量
							例如
								echo $name;
					
				
				警告级别错误:
					提示级别:warning(不影响后边代码执行)
						函数没参数
						例如function fun($a){
							
						}
						fun();
						
				致命错误:fatal(后续代码不执行,之前代码执行)
				调用一个不存在的函数
				
				demo();
				
				
		逻辑错误!!最恐怖的错误  不好解决(在公司中所有程序员后再干的事)
			程序逻辑出现问题
				例如
					$a=10;
					$b=20;
					if($a=$b){
						
					}else{
						
					}
					
					死循环也是逻辑错误
				如果晕倒这样的错误
				抽根烟喝点酒睡一觉
				使用断点法排错
				使用var_dump();或者是echo 查看执行结果
				die(遗言)函数; 死
				
		屏蔽错误:
			1.使用错误抑制符@只能屏蔽单行错误
				缺点:效率低
				语法格式
				echo @$name;
					
			2.修改php.ini配置文件中的display_error;
				display_errors=on	表示的是显示错误
				display_errors=off	表示的是不显示错误
				这种屏蔽错误的方法是最最nb的,因为所有的错误都不显示
				
				display_errors=on;
				display 显示
				errors很多错误
				on 开启
				off 关闭
				
			3.修改配置文件php.ini配置文件
				error_reporting
				error_reporting=E_ALL 报告所有错误
				显示所有错误,除了notice
				error_reporting=E_ALL & ~ E_NOTICE; 错误类型
				
				E_ALL	所有错误
				E_NOTICE	提示级别错误
				E_ERROR		致命错误
				E_WARNING	警告级别错误
				E_PARSE		语法错误
			4.使用函数屏蔽错误(作用于当前页)
			error_reporting(E_ALL && ~E_NOTICE);

	*/
	
	echo $name;
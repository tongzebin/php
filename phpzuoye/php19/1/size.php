<?php
	require("./1.php");
	//制作一个统计文件夹大小的函数
	//目录是没有大小的,目录的大小就是所有的文件大小累加到一起,就是文件夹的大小

	//定义一个路径(求大小的路径)
	$path="./aa/";

	function dirSize($dir){
		//判断传进来的参数是不是目录
		if(!is_dir($dir)){
			return "请传入一个有效的路径";
		}
		//定义一个存储总大小的变量
		$num=0;
		//打开目录
		$dd=opendir($dir);
		//遍历目录
		while(false!==$f=readdir($dd)){
			//跳转特殊目录
			if($f=="." || $f==".."){
				continue;
			}
			//处理路径
			//  ./aa/aa.txt
			//filesize(路径+文件名) 
			/*
				为什么要处理路径,
				就是因为查看文件类型或者是大小的时候是需要在没那函数中提供路径+文件名,
				路径是我们在使用函数的时候,
				传递进去的,路径的后边可以有/也可以没有/处理好路径以后,
				能保证的是路径后边一定是有/的,后边还有文件名,
				这样我们得到的就是有效的路径和文件名
			*/
			$file=rtrim($dir,"/")."/".$f;
			//判断是否是文件	
			if(is_file($file)){
				$num+=filesize($file);
			}

			if(is_dir($file)){
				$num+=dirSize($file);
			}
			


		}

		closedir($dd);
		return $num;
	}

	//echo dirSize($path);

	echo zhuanhuan(dirSize($path));
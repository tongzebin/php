<?php
	//制作一个统计文件夹大小的函数
	//目录是没有大小的,目录的大小就是所有的文件大小累加到一起,就是文件夹的大小
	//定义一个路径(球大小的路径)
	$p="./aa";
	function dirSize($dir){
		if(!is_dir($dir)){
			return "输入一个正确的目录路径";
		}
		$num=0;
		$dd=opendir($dir);
		while(false!==$f=readdir($dd)){
			if($f=='.'||$f=='..'){
				continue;
			}
			/*
				为什么要处理路径
				就是因为查看文件类型或者是大小的时候是需要在函数中提供路径+文件名
				路径使我们在使用函数的时候
				传递进去的,路径的后边可以有/的,后边还有文件吗=名,
				这样我们得到的就是有效的路径和文件名
			*/
			$file=rtrim($dir,'/').'/'.$f;
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
	echo dirSize($p);
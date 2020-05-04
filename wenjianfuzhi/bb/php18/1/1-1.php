<?php
	/*
		文件和目录操作
	*/
	//判断一个文件(在Linux中一般情况下把目录成为路径)	文件夹
	//is_dir(要判断的文件) 返回值	布尔类型
	$q="./1.php";
	$q="./aa";
	var_dump(is_dir($q));
	//判断换一个文件是否可读
	//is_readable(文件)
	$q="./a.txt";
	$q="./aa";
	var_dump(is_readable($q));
	//判断文件是否可写文件
	//is_writable(文件)
	$q="./a.txt";
	var_dump(is_writable($q));
	
	//判断文件是否是可执行文件
	//is_executable
	$q="./a.txt";
	var_dump(is_executable($q));
	//touch(要创建的文件) 创建文件
	$res=touch("SNS.txt");
	var_dump($res);
	//raename() 移动文件	参数1 老文件	参数2 新文件
	//copy	(老文件,复制到哪个目录)复制文件
	//unlink("./a.txt");
	//判断文件或目录是否存在
	$res=file_exists("./aa");
	var_dump($res);
	if(file_exists("./a.txt")){
		unlink("./a.txt");
	}else{
		echo "文件不存在";
	}
	//获取文件大小,单位是字节
	//size=filesize
	$size=filesize("./q.txt");
	var_dump($size);
	
	$q=is_file("./a.txt");
	var_dump($q);
<?php
	date_default_timezone_set('PRC');//设置时区
	//接收数据
	$name=$_GET['name'];
	$bt=$_GET['bt'];
	$content=$_GET['content'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$time=date('Y-m-d H:i:s');
	$str=$bt.'##'.$name.'##'.$content.'##'.$ip.'##'.$time.'@@';//拼接字符串
	file_put_contents('./ly.db',$str,FILE_APPEND);//追加写
	echo '留言成功';
	include './menu.php';
	
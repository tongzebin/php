<?php
	date_default_timezone_set('PRC');
	$content=$_GET['content'];
	$name=$_GET['name'];
	$bt=$_GET['bt'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$time=date("Y-m-d H:i:s");
	$info=$content.'##'.$name.'##'.$bt.'##'.$ip.'##'.$time.'@@';
	file_put_contents('./ly.db',$info,FILE_APPEND);
	
	echo '留言成功';
	include './menu.php';
	
	
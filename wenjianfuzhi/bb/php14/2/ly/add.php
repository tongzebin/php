<?php
	date_default_timezone_set('PRC');
	$name=$_GET['name'];
	$bt=$_GET['bt'];
	$content=$_GET['content'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$time=date('Y-m-d H:i:s');
	$str=$bt.'##'.$name.'##'.$content.'##'.$ip.'##'.$time.'@@';
	file_put_contents('./ly.db',$str,FILE_APPEND);
	echo '留言成功';
	include './menu.php';
	
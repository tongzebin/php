<?php
	$name=$_GET['name'];
	$bt=$_GET['bt'];
	$nr=$_GET['nr'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$time=date('Y-m-d H:i:s');
	$str=$bt.'#'.$name.'#'.$nr."#".$ip.'#'.$time."@";
	file_put_contents('./ly.txt',$str,FILE_APPEND);
	echo '留言成功';
	include 'menu.php';
	
	
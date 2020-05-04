<?php
	$del=$_GET['del'];
	$wj=rtrim(file_get_contents('./ly.db'),"@@");
	$new=explode('@@',$wj);
	unset($new[$del]);
	$num=count($new);
	if($new){
		$str1=implode('@@',$new)."@@";
	}else{
		$str1='';
	}
	
	file_put_contents('./ly.db',$str1);
	echo "删除成功还剩{$num}条留言";
	include './menu.php';
	
	
	
	
	
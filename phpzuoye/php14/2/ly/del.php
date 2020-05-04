<?php
	$del=$_GET['del'];
	$wj=rtrim(file_get_contents('./ly.db'),'@@');
	$arr1=explode('@@',$wj);
	unset($arr1[$del]);
	$num=count($arr1);
	if($arr1){
		$str=implode('@@',$arr1).'@@';
		file_put_contents('./ly.db',$str);
	}else{
		file_put_contents('./ly.db','');
	}
	echo '删除成功还剩'.$num.'条留言';
	include './menu.php';
<?php
	$jian=$_GET['jian'];
	$wj=rtrim(file_get_contents('./ly.txt'),'@');
	$arr=explode('@',$wj);
	unset($arr[$jian]);
	if($arr){
		$str=implode('@',$arr)."@";
		file_put_contents('./ly.txt',$str);
	}else{
		file_put_contents('./ly.txt','');
	}
	echo '删除成功';
	include './menu.php';
	
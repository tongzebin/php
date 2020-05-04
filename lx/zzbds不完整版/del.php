<?php
	$del=$_GET['del'];
	$wj=rtrim(file_get_contents('./sjk.txt'),'@');
	$arr1=explode('@',$wj);
	unset($arr1[$del]);
	//var_dump($arr1);
	$num=count($arr1);
	if($arr1){
		$str=implode('@',$arr1).'@';
		file_put_contents('./sjk.txt',$str);
	}else{
		file_put_contents('./sjk.txt','');
	}
	echo '删除成功还剩'.$num.'用户';
	echo "<a href='show.php'>浏览后台</a>\t"; 
	echo "<a href='zhuce.php'>去注册</a>\t"; 
	echo "<a href='index.php'>去登录</a>";
	
<?php
	$del=$_GET['del'];						//接收要删除的键
	$wj=rtrim(file_get_contents('./ly.db'),'@@');			//提取留言信息
	$arr1=explode('@@',$wj);				//字符串转换成数组
	unset($arr1[$del]);				//删除数组某个键
	$num=count($arr1);				//计数
	if($arr1){					//判断数组是否为空
		$str=implode('@@',$arr1).'@@';//拼接
		file_put_contents('./ly.db',$str);//覆盖写
	}else{
		file_put_contents('./ly.db','');//返回一个空字符串
	}
	echo '删除成功还剩'.$num.'条留言';
	include './menu.php';
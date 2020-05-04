<?php
	date_default_timezone_set('PRC');//设置时区
	$wj=rtrim(file_get_contents('./ly.db'),'@@'); //拿出文件去除多余字符
	$arr1=explode('@@',$wj);	//字符串转换成数组
	$rev=$_POST['rev'];//接受要修改的键
    var_dump($_POST);
    $bt=$_POST['bt'];//
    $name=$_POST['name'];
	$content=$_POST['content'];
	$ip=$_POST['ip'];
	$time=date('Y-m-d H:i:s');
    $str2=$bt.'##'.$name.'##'.$content.'##'.$ip.'##'.$time;//拼接修改完的字符串
	//var_dump($str2);
    $arr1[$rev]=$str2;//替换数组中原来的字符串
	//var_dump($arr1);
    $str=implode('@@',$arr1).'@@';//数组转换成字符串
	//var_dump($str);
    file_put_contents('./ly.db',$str);//将字符串覆盖写入源文件
	echo "<a href='show.php'>浏览留言</a>\t"; 
	echo "<a href=''>去留言</a>\t"; 
?>
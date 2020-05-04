<?php  
$del=$_GET['del'];//接收要删除的数据；
// echo $del;
// die();
$str=file_get_contents('./ly.db');//读入数据文件
//处理数据
$arr=rtrim($str,'@@');
//分割字符串
$arr=explode('@@',$arr);
// var_dump($arr);
unset($arr[$del]);//删除对应文件
// var_dump($arr);
$info=implode('@@',$arr); //再次整理数据为字符串
$info.='@@';
// var_dump($info);
file_put_contents('./ly.db',$info);//将修改后的数据重新写入数据文件
	

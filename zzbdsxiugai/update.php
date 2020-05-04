<?php
	//var_dump($_POST);
	//读取dbconfig.php文件中的数据
	$info=file_get_contents("./dbconfig.php");
	//preg_replace(正则,要替换的字符,需要操作的字符串)
	//$info=preg_replace("/define\(\".*?\",\".*?\"\)/",);
	//var_dump($info);
	foreach($_POST as $k=>$v){
		//修改后的值
		// echo 'k:'.$k."<br/>";
		// echo 'v:'.$v."<br/>";
		$info=preg_replace("/define\(\"{$k}\",\".*?\"\)/","define(\"{$k}\",\"{$v}\")",$info);
		var_dump($info);
	}
	file_put_contents("dbconfig.php",$info);
	//script标签中的代码就是js代码
	
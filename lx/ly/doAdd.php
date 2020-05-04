<?php
	//接收表单传递的内容
	$title=$_POST['title'];
	$author=$_POST['author'];
	$content=$_POST['content'];
	//本机ip
	$ip=$_SERVER['REMOTE_ADDR'];
	//echo($ip);
	//添加时间
	$time=date('Y-m-d H:i:s', time());
	//echo $time;
	if($title=='' || $author=='' || $content==''){
		echo "<script language=javascript>alert('标题、作者、内容必须全部填写！');location.href='index.php';</script>";
	}else{
		//处理字符串
	$info=$title.'##'.$author.'##'.$content.'##'.$ip.'##'.$time."@@";
	// echo $info;
						//FILE_APPEND  追加写
	file_put_contents('./ly.db',$info,FILE_APPEND);
	
	}
	


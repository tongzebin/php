<?php
	//赋值函数
	include './6.php';
	function dircopy($yuan,$new){
		if(!file_exists($new) || !is_dir($new)){
			//创建目录
			mkdir($new);
		}
		$dd=opendir($yuan);
		//遍历
		while(false!==($f=readdir($dd))){
			if($f=="." || $f==".."){
				continue;
			}
			//处理路径
			$yuanfile=rtrim($yuan,"/")."/".$f;
			$newfile=rtrim($new,"/")."/".$f;
			if(is_file($yuanfile)){
				mycopy($yuanfile,$newfile);
			}
			if(is_dir($yuanfile)){
				dircopy($yuanfile,$newfile);
			}
		}
		closedir($dd);
	}

	dircopy("../phpzuoye","./bb");
	echo "复制成功";



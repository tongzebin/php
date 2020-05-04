<?php
	function dircopy($yuan,$new){
		if(!file_exists($new)||!is_dir($new)){
			//创建目录
			mkdir($new);
		}
		$dd=opendir($yuan);
		while(false!==$f=readdir($dd)){
			if($f=='.'||$f=='..'){
				continue;
			}
			$yuanfile=rtrim($yuan,'/').'/'.$f;
			$newfile=rtrim($new,'/').'/'.$f;
			if(is_file($yuanfile)){
				copy($yuanfile,$newfile);
			}
			if(is_dir($newfile)){
				dircopy($yuanfile,$newfile);
			}
		}
		closedir($dd);
		
	}
	dircopy('./aa','./bb');
	echo '复制成功';
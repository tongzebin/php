<?php
	//删除函数
	function del($dir){
		if(!is_dir($dir)){
			return '请传入有效的目录';
		}
		if(file_exists($dir)){
			mkdir($dir);
		}
		$dd=opendir($dir);
		while(false!==($f=readdir($dd))){
			if($f=='.'||$f=='..'){
				continue;
			}
			//处理路径
			$file=rtrim($dir,'/').'/'.$f;
		}
		if(is_file($file)){
			unlink($file);
		}
		if(is_dir($file)){
			del($file);
		}
		closedir($dd);
		//删除目录
		rmdir($dir);
	}
	del('./acc');
	echo '删除完成';
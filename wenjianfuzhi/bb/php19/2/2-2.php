<?php
	function del($dir){
		if(!file_exists($dir)){
			mkdir($dir);
		}
		if(!is_dir($dir)){
			return '请输入正确的目录';
		}
		$dd=opendir($dir);
		while(false!==$q=readdir($dd)){
			if($q=='.'||$q=='..'){
				continue;
			}
			$qwe=rtrim($dir,'/').'/'.$q;
			if(is_file($qwe)){
				unlink($qwe);
			}
			if(is_dir($qwe)){
				del($qwe);
			}
		}
		closedir($dd);
		rmdir($dir);
	}
	del('./aaa');
	echo '删除成功';
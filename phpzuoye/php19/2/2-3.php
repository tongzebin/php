<?php
	function fz($y,$n){
		if(!file_exists($n)){
			mkdir($n);
		}
		$dd=opendir($y);
		while(false!==$f=readdir($dd)){
			if($f=='.'||$f=='..'){
				continue;
			}
			$yfile=rtrim($y,'/').'/'.$f;
			$nfile=rtrim($n,'/').'/'.$f;
			if(is_file($yfile)){
				copy($yfile,$nfile);
			}
			if(is_dir($yfile)){
				fz($yfile,$nfile);
			}
		}
		closedir($dd);
	}
	echo '复制成功';
	fz('./aa','./bb');
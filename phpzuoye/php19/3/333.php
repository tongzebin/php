<?php
	function del($a){
		if(!is_dir($a)){
			
		}
		$b=opendir($a);
		var_dump($a);
		while(false!==$f=readdir($b)){
			
			if($f=='.' || $f=='..'){
				continue;
			}
			var_dump($a);
			$file=rtrim($a,'/').'/'.$f;
			
			if(is_file($file)){
				unlink($file);
			}
			if(is_dir($file)){
				del($file);
			}
		}
		closedir($b);
		
		rmdir($a);
	}
	del("./aa");
	echo "ok";
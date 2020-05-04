<?php
	$q="./aa";
	echo qwe($q);
	function qwe($a){
		$qq=opendir($a);
		$sum=0;
		while(false!==$w=readdir($qq)){
			if($w=='.'||$w=='..'){
				continue;
			}
			$zxc=rtrim($a,'/').'/'.$w;
			if(is_file($zxc)){
				$sum+=filesize($zxc);
			}
			if(is_dir($zxc)){
				$sum+=qwe($zxc);
			}
			var_dump($w);
		}
		return $sum;
	}
	
<?php
	function dg($m){
		echo $m;
		if($m>1){
			dg($m-1);
		}else{
			echo '结束';
		}
		echo $m;
	}
	
	dg(10);
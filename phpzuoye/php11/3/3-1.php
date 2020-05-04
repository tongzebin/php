<?php
	function dg($js){
		echo $js;
		if($js>1){
			dg($js-1);
		}else{
			echo '递归结束';
		}
		echo $js;
	}
	dg(5);
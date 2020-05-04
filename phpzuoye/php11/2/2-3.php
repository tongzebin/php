<?php
	function sum(){
		$s=func_get_args();
		var_dump($s);
		$sum=0;
		$n=func_num_args();
		for($i=0;$i<$n;$i++){
			$sum+=func_get_arg($i);
		}
		return $sum;
	}
	echo sum(1,1,1,1,1,1,1,1,1,1,1,123);
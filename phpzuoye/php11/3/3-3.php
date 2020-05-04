<?php
	function sum(){
		$a=func_get_args();
		$n=func_num_args();
		var_dump($a);
		$sum=0;
		for($i=0;$i<$n;$i++){
			$sum+=func_get_arg($i);
		}
		return $sum;
	}
	echo sum(32,123,53,213,78,3);
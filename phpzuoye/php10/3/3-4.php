<?php
	function mm($gg){
		echo '函数1';
		$gg();
	}
	mm('gg');
	
	function gg(){
		echo '函数2';
	}
	echo '<hr/>';
	function js($q,$w,$e){
		$sum=0;
		for($i=$q;$i<=$w;$i++){
			$sum+=$e($i);
		}
		return $sum;
	}
	echo js(222,877,'gz');
	function gz($a){
		if($a%2==0){
			return $a;
		}
	}
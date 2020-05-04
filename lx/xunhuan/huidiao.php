<?php
	function su($a,$b,$c){
		$sum=0;
		for($i=$a;$i<=$b;$i++){
			$sum+=$c($i);
		}
		return $sum;
	}
	
	echo su(1,10,'c2');
	
	function c2($q){
		if($q%2==0){
			return $q;
		}
	}
	
	function c3($q){
		if($q%3==0){
			return $q;
		}
	}
	echo su(1,10,'c3');
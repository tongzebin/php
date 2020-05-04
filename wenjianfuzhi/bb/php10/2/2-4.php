<?php
	function qwe($a){
		echo '函数1';
		$a();
	}
	qwe('asd');
	function asd(){
		echo '函数2';
	}
	
	function js($q,$w,$gz){
		$sum=0;
		for($i=$q;$i<=$w;$i++){
			$sum+=$gz($i);
		}
		return $sum;
	}
	
	echo js(2,10,'gz1');	
	
	function gz1($q){
		if($q%2==0){
			return $q;
		}
	}
	
	
<?php
	$aa=array(1,2,3,4,5,6,7,8,9);
	array_pop($aa);
	var_dump($aa);
	
	echo '<hr/>';
	
	$ar=array('q','w','e','r');
	function asd(array &$ar){
		foreach($ar as $k=>$v){
			echo $v;
		}
	unset($ar[$k]);
	var_dump($ar);
	return $v;
	}
	var_dump(asd($ar));
	var_dump($ar);
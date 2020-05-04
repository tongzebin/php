<?php
	$ar=array(123,456,789,123456789);
	$num=count($ar);
	
	echo $num;
	
	$res=array_shift($ar);
	
	var_dump($res);
	var_dump($ar);
	
	$res=array_unshift($ar,'bnm');
	
	var_dump($res);
	
	
	
	
	
	$q=array(1,2,3,4,5,6,7,8);
	$w=in_array(1,$q);
	if($w){
		echo 'true';
	}else{
		echo 'false';
	}
	
	
	
	
	
	
	$qwe=array(1,2,3,4,5,6,7,8,9);
	$wq=array_slice($qwe,2,3);
	var_dump($wq);
	
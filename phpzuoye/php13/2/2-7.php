<?php
	$qq=array(234,425,'ghse',342);
	$q=count($qq);
	echo $q;
	
	$res=array('qe',13,'rgsa',14);
	$eee=array_shift($res);
	var_dump($res);
	
	$res=array('sjb',452,'gyuuh',561);
	$qqq=array_unshift($res,'yguhj');
	var_dump($res);
	
	$qwe=array(123,134,5654);
	$sss=array_push($qwe,'ghjb');
	var_dump($qwe);
	
	$asd=array('a','b','c','d');
	$w=in_array('b',$asd);
	if($w){
		echo '存在';
	}else{
		echo '不存在';
	}
	
	$oo=array(23,123,234,5342,23);
	$wwe=array_slice($oo,2,3);
	var_dump($wwe);
	
	
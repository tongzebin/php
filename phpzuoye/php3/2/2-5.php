<?php
	$a=1223;
	$a='asdas';
	$a=(int)$a;
	
	$a='1231';
	$a='123asd';
	$a='123da21';
	$a='a13zs';
	var_dump($a);
	$a=(array)$a;
	var_dump($a);
	
	$a=1231;
	$a=1+1;
	$a='a'+1;
	$a='12s'+2;
	$a='a13'+2;
	$a='asd123sd'+2;
	$a='scs'+'sad';
	$a='2e2'+2;
	var_dump($a);
	
	if(4<2){
		echo 'ok';
	}else{
		echo 'no';
	}
	$n=0;
	$n=(bool)$n;
	var_dump($n);
	
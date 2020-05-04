<?php

	function xz(){
		static $a=0;
		$a++;
		return $a;
	}
	$str=xz();
	$str=xz();
	$str=xz();
	$str=xz();
	$str=xz();
	$str=xz();
	$str=xz();
	$str=xz();
	if($str>9){
		echo '受到限制';
	}else{
		echo '法国红酒';
	}
	
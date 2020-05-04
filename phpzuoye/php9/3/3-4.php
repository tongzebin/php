<?php
	function js(){
		static $a=0;
		$a++;
		return $a;
	}
	$js=js();
	$js=js();
	$js=js();
	$js=js();
	$js=js();
	$js=js();
	$js=js();
	$js=js();
	$js=js();
	$js=js();
	$js=js();
	if($js>=10){
		echo '超过10次访问,访问受限';
	}else{
		echo '正常访问';
	}
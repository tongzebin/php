<?php
	$name='张三';
	echo $name.'<hr/>';
	function zh(){
		global $name;
		$name='李四';
		echo $name.'<hr/>';
		return $name;
	}
	echo zh();
	echo '<hr/>';
	
	$shu1=1231;
	$shu2=1527;
	$shu3=1522;
	function cqjbl(){
		
		echo $GLOBALS['shu1'].'<hr/>';
		echo $GLOBALS['shu2'].'<hr/>';
	}
	echo $GLOBALS['shu3'].'<hr/>';
	cqjbl();
	
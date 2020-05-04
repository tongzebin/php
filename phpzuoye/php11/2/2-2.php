<?php
	$a=function(){echo '我是匿名函数'.'<br/>';};
	
	$a();
	
	
	function cc($a){
		$a();
		echo '函数一';
	}
	
	cc(function(){echo '函数二';});
	
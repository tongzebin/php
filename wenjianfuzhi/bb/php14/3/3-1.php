<?php
	echo time();
	echo '<br>';
	echo date('Y-m-d');
	
	echo '今天是'.date('w');
	echo '本月有'.date('t').'天';
	
	$time=mktime(12,12,32,3,5,2000);
	echo date('Y-m-d',$time);
	
	
	$time=mktime(0,0,0,4,1,2014);
	echo $time;
	
	$str=microtime(true);
	echo $str;
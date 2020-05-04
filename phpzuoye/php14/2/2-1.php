<?php
	echo time();
	echo '<br>';
	echo date("Y-m-d H:i:s");
	echo '今天是'.date('w');
	echo '本月有多少天'.date("t");
	
	$time=mktime(21,23,54,12,05,2018);
	
	echo date("Y-m-d H:i:s",$time);
	$time=mktime(0,0,0,4,1,2014);
	echo '<br>';
	
	echo $str=microtime(true);
	echo $str;
	
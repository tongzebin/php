<?php
	date_default_timezone_set('PRC');
	//求出1天前的时间
	
	//strtotime
	$time1=strtotime('-1 day');
	echo $time1;
	echo '<br>';
	$time1=strtotime('-1 week');
	echo date("Y-m-d H:i:s,$time1");
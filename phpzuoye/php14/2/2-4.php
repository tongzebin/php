<?php
	date_default_timezone_set('PRC');
	echo '<br>';
	$time1=strtotime('-1 day');
	echo $time1;
	echo '<br>';
	$time1=strtotime('-1 week');
	echo date('Y-m-d',$time1);
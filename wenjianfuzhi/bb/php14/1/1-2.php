<?php
	date_default_timezone_set('PRC');
	$start=microtime(true);
	for($i=0;$i<=1000;$i++){
		
	}
	sleep(5);
	$end=microtime(true);
	echo $end-$start;
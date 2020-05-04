<?php
	date_default_timezone_set('PRC');
	$start=microtime(true);
	for($i=0;$i<45789;$i++){
		
	}
	$end=microtime(true);
	sleep(2);
	echo round(($end-$start),5);
<?php
	date_default_timezone_set('PRC');
	$str=microtime(true);
	for($i=0;$i<=123523;$i++){
		
	}
	sleep(2);
	$end=microtime(true);
	echo round(($end-$str),6);
	
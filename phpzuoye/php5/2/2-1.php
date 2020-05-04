<?php
	header('content-type:text/html; charset=utf-8');
	echo 'asih';
	echo @$a;
	echo 'asdlashd';
	
	$a=iconv('gb2312','utf-8',`ipconfig`);
	var_dump($a);
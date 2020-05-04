<?php
	$arr=array(
		array(1,12,313,'感觉好看吗',44),
		array(1,12,'gh',123,44),
		array(1,'name'=>313,123,44),
	);
	var_dump($arr);
	echo '<pre>';
	print_r($arr);
	echo $arr[2][1];
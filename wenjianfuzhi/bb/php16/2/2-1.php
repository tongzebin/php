<?php
	$p="/ac/";
	$str="acaokaackn";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	
	$p="/sakjb/";
	$str="astuvybinm\nsvgbhn";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	
	$p="/a.a/";
	$str="ahajv";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	
	$p="/a.*a/";
	$str="asdbbavgha";
	echo preg_match($p,$str,$arr);
	var_dump($arr);
	
	$p="/a.*?/";
	$s="anjiugaoihiuaihiha";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$p="/s.+s/";
	$s="/suybsiutsssss/";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$p="/as\./";
	$str="as.asd";
	echo preg_match($p,$str,$a);
	var_dump($a);
	
	$p="/[a-z][0-9]{3}/";
	$s="asnmq21256";
	echo preg_match($p,$s);
	var_dump($a);
	
	$p="/[\d][\D]/";
	$s="sjkbs214_";
	echo preg_match($p,$s,$a);
	var_dump($a);
	$p="/[\w][\D]/";
	$s="aygab2123";
	echo preg_match($p,$s,$a);
	var_dump($a);
	$p="/[\s][\S]/";
	$s="sdagh12313_";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$s="15899999999";
	$p="/^[1][3-9][0-9]{9}$/";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$s="845sdsa@qweasd54.com.cn";
	$p="/[0-9a-zA-Z]+@[a-zA-Z0-9]+(\.[a-zA-Z]{2,}){1,2}/";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
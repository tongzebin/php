<?php
	$p="/asd/";
	$s="asdauihjx";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$p="/a..a/";
	$s="auhauyb";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$p="/[0-9][a-z][A-Z]/";
	$s="aytygb21DTY3zga	5dftgs";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$p="/[\d][\D]/";
	$s="asi872873sadad";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$p="/\w*/";
	$s="asdyufgn2u23423489ysuhb";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$p="/\s+?s/";
	$s="asiaugdhpj576t8ydrcty68d7tu_ubaUAGSBUAB";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$p="/^[1][3-9][0-9]{9}$/";
	$s="18888888888";
	echo preg_match($p,$s,$a);
	var_dump($a);
	
	$p="/[a-zA-Z0-9]+@[0-9a-zA-Z]+(\.[a-zA-Z]{2,}){1,2}/";
	$s="aybkbkba27617AGSA@auigigc67JHV.avi.div";
	echo preg_match($p,$s,$a);
	var_dump($a);
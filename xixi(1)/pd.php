<?php
	include 'da.php';
	$all = array_combine($arr,$ans);
	//题库的数组
	$timu = file_get_contents('tm.db');
	$tm = explode('##',$timu);
	$kong = '';
	$n1=file_get_contents('sl.php');
	for ($i=0;$i<$n1;$i++){ 
		$kong .= $_GET["{$i}"]."##";
		$a = $_GET["{$i}"];
		$da = explode('##',rtrim($kong,'##'));
		if($tm[$i]==array_search($a,$all)){
			echo "第".($i+1)."题:对;<br/>";
		}else{
			echo "第".($i+1)."题:错;<br/>";
		}
	}
?>
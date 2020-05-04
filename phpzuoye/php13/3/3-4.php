<?php
	$str="asgbnskhajkaakjb,a";
	$q=chunk_split($str,5,'-');
	$q=rtrim($q,'-');
	var_dump($q);
	
	$qe=explode('-',$q);
	var_dump($qe);
	
	$str=implode('%',$qe);
	var_dump($str);
	
	$str="1bhvnm1";
	$q=ltrim($str,1);
	$w=rtrim($str,1);
	$e=trim($str,1);
	var_dump($q);
	var_dump($w);
	var_dump($e);
	
	
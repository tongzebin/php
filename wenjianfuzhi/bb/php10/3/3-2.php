<?php
	$qw=array('q','w','a','z','x','d');
	array_pop($qw);
	var_dump($qw);
	
	function sc(array &$qw){
		foreach($qw as $k=>$v){
			
		}
		return $k;
		unset($qw[$k]);
	}
	var_dump(sc($qw));
	
	var_dump($qw);
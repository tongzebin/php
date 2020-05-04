<?php
	$q='akjkhjkxc-asbnas.,.-ajhbn-131131-1';
	$w=chunk_split($q,2,'-');
	$w=rtrim($w,'-');
	var_dump($w);
	
	
	$a=explode('-',$w);
	var_dump($a);
	
	$ee=implode('',$a);
	var_dump($ee);
	
	$ty='1cg1';
	$l=ltrim($ty,'1');
	$r=rtrim($ty,'1');
	var_dump($l);
	var_dump($r);
	var_dump($ty);
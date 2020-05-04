<?php
	$arr=['2019-01-01'];
	$a=preg_grep("/[0-9]{4}-\d{2}-[^\D]{2}/",$arr);
	var_dump($a);
	
	$a='23,323,14%nk';
	var_dump(preg_replace("/\D/",",",$a));
	
	$a=array(123,"/",'*',23786,"as;doih");
	var_dump(preg_replace("/\D/","*",$a));
	
	echo "<hr>";
	
	$str="<b>aaa</b><b>bbb</b>";
	var_dump(preg_replace("/b>/","i>",$str));
	
	$q="1111-11-11";
	var_dump(preg_replace("/(\d{4})-(\d{2})-(\d{2})/","\\2/\\3/\\1",$q));
	echo preg_match("/#.*?#/","#syagu#sgyg123#an",$a);
	var_dump($a);
	$str="ayg#shv#sihb31#";
	$a=preg_split('/[#]/',$str);
		var_dump($a);
	echo preg_match("/#.*#/s","a#hbj\na#sdj\nsd#j",$q);
	var_dump($q);
<?php
	$arr=['2012-10-22','2136,03-31','2017-04,01','1236,06,20'];
	$a=preg_grep("/\d{4}-\d{2}-\d{2}/",$arr);
	var_dump($a);
	$arr=['2012-10-22','2136,03-31','2017-04,01','1236,06,20'];
	$a=preg_grep("/^\d{4}({-,})\d{2}\\1\d{2}$/",$arr);
	var_dump($a);
	
	$a=array(1,"%",51,"^");
	var_dump(preg_replace("/\D/","@",$a));
	echo '<hr>';
	$str="<b>aa<\b><b>bb</b><b>cc</b>";
	var_dump(preg_replace("/b>/","i>",$str));
	$str="<b>aa<\b><b>bb</b><b>cc</b>";
	var_dump(preg_replace("/<b>(.*?)<\/b>/","<i>\\1</i>",$str));
	
	$str="2019-08-01";
	var_dump(preg_replace("/(\d){4}-(\d){2}-(\d){2}/",'\\2/\\3/\\1',$str));
	$str="12@156%2165^51";
	$a=preg_split("/[@]/",$str);
	var_dump($a);
	echo preg_match("/^[a-z]+$/i",'sdkajbJIBN');
	echo preg_match("/#.*#/U","sdahg1#usjd#ua1265",$a);
	var_dump($a);
	echo preg_match("/#.*#/s","qwd#uyg\nsj#asd",$a);
	var_dump($a);
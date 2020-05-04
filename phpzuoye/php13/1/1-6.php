<?php
	/*
		nl2br 	\n(换行) 转换成br标签
	*/
	$str="AV比较耐\n克;率不\n能l.kyv";
	echo $str;
	echo '<br>';
	$qwe=nl2br($str);
	echo $qwe;
	
	//str_shuffle;
	$str="fghjklfghbnjmk";
	$str2=str_shuffle($str);
	echo '<br>';
	
	echo $str2;
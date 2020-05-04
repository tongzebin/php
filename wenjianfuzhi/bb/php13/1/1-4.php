<?php
	//chunk_spilt 	把字符串分割为更小的部分
	/*
		参数1:要分隔的字符串
		参数2:可选参数,几个亿分割
		参数3:可选参数,用于分割的字符
	*/
	
	$str="dfghjkl'l;lkb,iuyvbn,ioubn,asda";
	$qwe=chunk_split($str,2,',');
	$qwe=rtrim($qwe,',');
	var_dump($qwe);
	//explode 把字符吃按照指定的字符拆分成数组
	/*
		参数1:用指定的字符分割字符串
		参数2:要分隔的字符
		返回值:数组(按照指定字符拆分后的结果)
	*/
	$arr=explode(',',$qwe);
	var_dump($arr);
	
	/*
		implode	将数组链接成字符串
		参数1
		参数2
		
	*/
	
	$str=implode('',$arr);
	var_dump($str);
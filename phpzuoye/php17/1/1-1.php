<?php
	//正则函数
	//preg_grep()	返回匹配模式的数组条目
	//var_dump($arr);
	$arr=['2019-7-22','2019-09,03','2019,04-22','2019,12,31'];
	//var_dump($arr);
	//$a=preg_grep('正则','要操作的数组');返回值,数组匹配成功的结果
	$a=preg_grep("/\d{4}-\d{2}-\d{2}/",$arr);
	var_dump($a);
	$arr=['2019-7-22','2019-09,03','2019,04-22','2019,12,31'];
	//$a=preg_grep("/^\d{4}([-,]\d{2}[,-]\d{2}$/),$arr");
	//	\\1表示重新模式单元(表示的是前边第一个小括号中匹配什么结果,我这个\\1就匹配什么结果)
	$a=preg_grep("/^\/d{4}([-,])\d{2}\\1\d{2}$/",$arr);
	var_dump($a);
	
	/*
		preg_replace	执行正则搜索和替换
		参数1:正则
		参数2:要替换的字符
		参数3:要操作的字符串或者是数组
	*/
	$a="22/2456786%446#46";
	var_dump(preg_replace("/\D/",'@',$a));
	var_dump(preg_replace("/\D/",'',$a));
	
	$a=array(1,'#',111,'*');
	var_dump(preg_replace("/\D/","@",$a));
	
	echo '<hr>';
	
	$str="<b>aaa</b><b>ccc</b><b>dddd</b>";
	var_dump(preg_replace("/<b>(.*?)<\/b>/","<i>\\1</i>",$str));
	
	//2019-07-22	2019/07/22
	$str="2019-08-22";
	var_dump(preg_replace("/(\d{4})-(\d{2})-(\d2{2})/","\\2/\\3/\\1",$str));
	$str="123*136+9451/rt#";
	$a=preg_split('/[@]/',$str);
	var_dump($a);
	
	//修正符	/表达式/修正符
	//i	可以让正则表达式不区分大小写
	echo preg_match("/^[a-z]+$/i","asybnIBNM");
	//U	作用是防止正则贪婪模式	
	echo preg_match("/#.*#/s","q#tfv#gay#ysacjh#yvv",$arr);
	var_dump($arr);
	
	
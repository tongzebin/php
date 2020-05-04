<?php
	/*
		使用数字中的值
			1使用数组中的所有内容
				查看数组方式
					var_dump();
					print_t();
				注意:echo 不能输出数组(只能输出标量)
				var_dump和print_r的区别
					var_dump打印数组可以查看数组类型和值
					print_r 只能查看值
	
	*/
	$arr=['安居客把你们','好奥斯丁','奥山'];
	var_dump($arr);
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
	
	//echo 虽然不能直接输出数组,但是可以通过制定数组的标来输出数组的值;
	
	echo $arr[0];
	
	echo '<a href="1-4.php?a=ad&&b=aksn&&c=akjg">视频银行</a>';
	var_dump($_GET);
	//echo $_GET['a'];
	
	
	
	
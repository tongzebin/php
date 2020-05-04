<?php
	/*
		数组函数
			count	统计数组长度
	*/
	$arr=array(31,5345,24,24,'fs');
	$q=count($arr);
	echo $q;
	//array_shift 删除数组中的第一个元素
	//参数1 规定的数组
	//返回值:删除的元素
	$res=array_shift($arr);
	var_dump($res);
	var_dump($arr);
	
	/*
		array_unshift 在数组的开头一个或多个元素
		参数1:规定的数组
		参数2:要插入的元素
		返回值:插入后信数组的长度
		array_pop
		array_push()	在数组的末尾插入一个或多个元素
	*/
	$q=array(234,213,1344,2223,1414);
	$res=array_push($arr,'fghj',567,'看见你');
	var_dump($q);
	
	
	/*
		in_array 	搜素素组中是否纯在指定的值
		参数1	要搜索的值
		参数2	在哪个数组中搜索
		返回值:布尔类型的值	有返回true	否知返回false
	*/
	$arr=array('qwe','asd','zxc');
	$res=in_array('qwe',$arr);
	if($res){
		echo '存在改参数';
	}else{
		echo '不存在改参数';
	}
	
	/*
		array_slice 从数组中取出一段
		参数1:从哪个下标开始取出
		参数2:取出几条
	*/
	$q=array('aa','aa',213,442,13);
	$res=array_slice($q,2,2);
	var_dump($res);
	
	
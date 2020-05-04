<?php
	/*
		和数组相关的几个概念!!
			一维数组
				例如:$arr=array(1,2,3,4);
				概念:数组中的值,是非数组的值,这个数组就是一维数组
			二维数组
				数组中的值,还是数组
				如果想拿到二维数组中的值
			多为数组'	
				就是一个数组中的值是数组,在这个数组还有数组,就是多维数组
	*/
	$arr=array(null,2,'男',4);
	$arr2=array('asdasd',2,'男',4);
	$arr3=array('asd',2,'男',4);
	$arr4=array(null,2,'女',4);
	$arr5=array(null,2,'男',4,3);
	var_dump($arr);
	$arr11=array('name'=>$arr,$arr3,'age'=>$arr4,$arr5);
	
	var_dump($arr11);
	
	
	//echo $arr11[];
	
	$q=array(array(1,2,3),array('qw','ew','ss'));
	var_dump($q);
	$w=[array(1,2,3),array(3,4,56)];
	var_dump($w);
	
	
	$s3=[
		[3,24,52],
		[123,43,343]
	];
	
	var_dump($s3);
	$s4=array(
		array(1,23,4,23,3),
		array(1,23,4,23,3),
		array(1,23,4,23,3),
		array(1,23,4,23,3)
		
		);
		var_dump($s4);
	
	
	
	
	
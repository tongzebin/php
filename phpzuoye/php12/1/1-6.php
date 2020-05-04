<?php
	/*
		删除数组元素
			unset($arr[0]);
	*/
	
	$arr=array('奥斯丁','awful','萨达');
	//unset
	
	unset($arr[0]);
	var_dump($arr);
	
	for($i=0;$i<=3;$i++){
		unset($arr[$i]);
	}
	
	//清空数组
	$arr=array();
	var_dump($arr);
	
	//修改数组元素
	//语法格式  数组变量['下标']=新值;
	
	$arr[2]=';来看感觉非限制性非常高不能';
	var_dump($arr);
	
	$arr2=array('name'=>';厉害不能','name2'=>'阿飞');
	var_dump($arr2);
	
	$arr2['name']='爱皮裤已具备';
	var_dump($arr2);
	
	
	
	
	
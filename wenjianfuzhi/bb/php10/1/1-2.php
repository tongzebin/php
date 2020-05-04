<?php
	/*
		array_pop() 删除数组中的最后一个元素;
		
	*/
	//定义数组用array 语言结构
	//$arr=array(数组的值,数组的值,数组的值);
	$arr=array('张三','李四','王五');
	//echo $arr//数组不能输出
	var_dump($arr);
	var_dump(array_pop($arr));
	var_dump($arr);
	echo '<hr/>';
	
	//自定义一个删除数组最后一个元素的函数
	$arr=array('张三','李四','王五');
	var_dump($arr);
	//在形参前加array表示后边的值必须是array数组
	function my_pop(array &$arr){
		//var_dump($arr);
		//判断传进来的参数是不是数组
		//if(is_array($arr)){
			
		//}else{
		// echo '不是数组';
		//}
	//}
	//遍历
	//键值对 =>
	//foreach
	foreach($arr as $k=>$v){
		//echo $v.'<br/>';
		echo $v;
		echo $k;
	}
	//echo $arr[$k];
	//echo $k;
	//销毁一个变量

	unset($arr[$k]);
	
	return $v;
	
	}
	
	var_dump(my_pop($arr));
	var_dump($arr);
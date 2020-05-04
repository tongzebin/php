<?php
	/*
		可变个数的变量:
			func_get_args()	返回一个数组,数组中包括所有参数
			func_num_args()	返回调用函数是传图参数的个数
			func_get_arg()	$a[1]
	*/
	function sum($a,$b){
		echo $a+$b;
	}
	function sum2(){
		$sum=0;
		//通过这个系统函数可以获取到实参传递的所有参数值
		$a=func_get_args();
		var_dump($a);
		//echo func_get_agr(2);
		$n=func_num_args();
		for($i=0;$i<$n;$i++){
			$sum+=func_get_arg($i);
		}
		return $sum;
	}
	echo sum2(1,2,3,4,5,6,7,8);
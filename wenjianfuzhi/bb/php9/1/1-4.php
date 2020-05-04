<?php
	/*
		静态变量:
			定义:在函数内部使用static声明的变量就是静态变量
			静态变量的特征:
				1.静态变量只能被初始化一次
				2.静态变量在函数执行结束后,不会被回收
				3.静态变量一般用于计算函数的调用次数
	*/
	// function add(){
		// $a=1;
		// $a++;
		// return $a;
	// }
	// //每一次调用,函数都会被执行一次,函数执行一次后,$a变量=1这个也被执行
	// echo add();
	// echo add();
	// echo add();
	
	// function add(){
		// static $a=1;
		// $a++;
		// return $a;
	// }
	
	function add(){
		
		static $a=1;
		$a++;
		return $a;

	}
	$res=add();
	$res=add();
	$res=add();
	$res=add();
	$res=add();
	$res=add();
	$res=add();
	$res=add();
	
	if($res>900){
		echo '次数上限';
	}else{
		echo '继续执行';
	}
	
	
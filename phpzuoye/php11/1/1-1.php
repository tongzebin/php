<?php
	/*
		递归函数:
			在函数内部出现自己调用自己的现象,这种函数的格式就是递归
		作用于:无限分类,递归删除文件
	*/
	function demo($n){
		echo $n;
		if($n>1){
			demo($n-1);
		}else{
			echo '................';
		}
		echo $n;
	}
	demo(3);

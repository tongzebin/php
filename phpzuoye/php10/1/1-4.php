<?php
	/*
		回调函数
			将一个函数当参数传递给另一个函数,
			当当前函数执行完毕后,在去执行传进去的函数
			这个过程就是回调函数
			语法格式
				function 函数A(形参){
					php代码
				}
				函数A(函数B)
				function 函数B(){
					php代码
				}
				
				
	
	*/
	
	
	
	function a($fun){
		$fun();
		echo '上来看好吧';
		
	}
	a('b');
	function b(){
		echo '阿搜狐不是来回';
	}
	/*
		回调函数的使用时机
			定义函数的目的:为了节省代码量,让程序更加严谨
			由于函数可以被重复调用,每一次调用函数的时候,通过传递不同
			的参数,一个得到不同的结果,但是函数的内部代码不能发生改变
	*/
	
	// function fun($,$b){
		// return $a+$b;
	// }
	// fun();
	
	echo '<hr/>';
	
	function fun($n,$m,$x){
		$sum=0;
		for($i=$n;$i<=$m;$i++){
			$sum+=$x($i);
		}
		return $sum;
	}
	echo fun(1,10,'er');
	echo '<hr/>';
	
	function er($a){
		if($a%2==0){
			return $a;
		}
	}
	echo fun(2,133,'san');
	function san($a){
		if($a%3==0){
			return $a;
		}
	}
	
	
	
	
	
	
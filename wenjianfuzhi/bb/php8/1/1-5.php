<?php
	//参数问题
	function a($q,$w){
		echo '技术能力是';
		echo '体育馆户籍'.$q.'快速化'.$w;
	}
	//a(100,10)
	/*function 函数名 (形参){
		
	}
	函数名(实参)
	实参的值是传递给形参的
	
	*/
	echo '<hr/>';
	
	//实现一个能输出n-m的函数
	function fun2($n,$m){
		echo $n;
		echo $m;
		for($i=$n;$i<=$m;$i++){
			echo $i.'<br/>';
		}
	}
	function sum($n,$m){
		$sum=0;
		for($i=$n;$i<=$m;$i++){
			$sum+=$i;
		}
		echo $sum;
	}
	
	
	
	
	function sum1($n,$m){
		$sun=0;
		for($i=$n;$i<=$m;$i++){
			if($i%2==0){
				$sum+=$i;
			}
		}
		echo $sum;
	}
	
	
	echo '<hr/>';
	function tables($n,$m,$x){
		echo $x;
		echo "<table border='1' width='300'>";
		
		for($i=1;$i<=$n;$i++){
			echo '<tr>';
				for($j=1;$j<=$m;$j++){
					echo '<td>奥沙路口吗</td>';
				}
			echo '</tr>';
		}
		echo '</table>';
	}
	tables(7,3,4);
	//调用函数
	//tables(3,2)
	/*
		如果实参传多了,蛔虫做导游一次赋值给形参
		如果实参少了,形参多了,会报错(警告级别错误),说函数需要3个函数,你就给我2和参数
	*/
	
	/*
		默认值的问题:
			形参可以有默认值,如果实参传值了,那么就用实参传递的值,如果没有传值,就是用默认值
	*/
	
	
	
	
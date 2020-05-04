<?php
	//实现一个能输出1-100的自定义函数
	//函数可以重复使用
	function num(){
		for($i=1;$i<=100;$i++){
			echo $i.'<br/>';
		}
	}
	num();
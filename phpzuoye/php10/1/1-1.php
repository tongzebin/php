<?php
	/*
		引用传参(变量的引用)
			在设定函数参数时,如果在形参变量前加&
			就表示实参传递是要以引用的方式传递到形参
			这时候形参的值发生变化,实参中的变量会发生变化
	*/
	// $m=10;
	// $n=&$m;
	// $n++;
	// echo $m;
	// echo '<br/>';
	// echo $n;
	
	function num(&$n){
		echo $n++;
		echo $n;
	}
	num($m);
	echo $m;
	
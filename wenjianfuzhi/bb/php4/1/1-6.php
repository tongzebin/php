<?php
	/*
		逻辑运算符
			&&(and)	逻辑与运算
			逻辑与:运算符两侧都为真,整个表达式才为真
				
	*/
	$n=3>4;
	$m=4<6;
	$res=$n && $m;
	var_dump($res);
	
	/*
		逻辑或运算 || (or)
			两边一遍为真,表达式即为真
			两侧都为加,表达式为假
	*/
	
	$n=4<2;
	$m=6<4;
	$res=$n || $m;
	var_dump($res);
	
	/*
		逻辑异或	xor
			相同为假	不同为真
		生孩子:
			男的和男的	不能生孩子(false)
			男和女		可以(true)
			女和男		可以
			女和女		不可以
	*/
	$n=false;
	$m=false;
	$res=($n xor $m);
	var_dump($res);
	
	$a=3>4;
	$b=5<99;
	$c=13>123;
	if($c && $a && $b){
		echo '满足';
	}
	else{
		echo '不满足';
	}
	/*
		逻辑与短路
			如果左侧为假,右边不执行
		逻辑或短路
			如果左侧为真,右边不执行
			
	*/
	
	echo "<br/>"/
	$a=3;
	$b=4;
	if(($a=0) && ($b = 5)){
		$a++;
		$b++;
	}
	echo $a.'<br/>';
	echo $b.'<br/>';
	
	$n=3;
	$m=4;
	if(($n=0)||($m=5)){
		$m++;
		$n++;
	}
	echo $n.'<br/>';
	echo $m.'<br/>';
	
	echo "<br/>";
	$a=3;
	$b=4;
	if(($a==0)&&($b=5)){
		$a++;
		$b++;
	}
	echo $a."<br/>";
	echo $b."<br/>";
	
	
	
	
	
	
	
	
<?php
	/*
		do while 循环 ()
		语法格式:
			起始条件
			do{
				循环体
				影响条件
			}while(终止条件)
	*/

	$j=1;
	while($j<=10){
		echo $j;
		$j++;
	}
	echo "<hr/>";
	//循环1-10
	$i=11;
	do{
		echo $i;
		$i++;
	}while($i<=10);
		
	//1-100
	
	$sum=0;
	$i=0;
	do{
		$sum+=$i;
		$i++;
	}while($i<=100);
		echo $sum;
	
	//用do while 循环10行10列的表格
	echo "<table border='1' width='700'>";
	$tr=1;
	do{
		//if($tr%2==0){
		//	echo "<tr bgcolor='red'>";
		//}else{
		//	echo '<tr bgcolor="green">';
		//}
		
		$bgcolor=$tr%2==0?'red':'green';
		echo '<tr bgcolor="$bgcolor">';
		$td=1;
		do{
			echo "<td>{$td}</td>";
			$td++;
		}while($td<=10);
		echo "<hr/>";
		$tr++;
	}while($tr<=10);
	echo '</table>';
	/*
		while循环 和 do while 循环的区别
			while 循环的每一次都需要判断,如果判断的结果满足条件循环就继续
			如果判断的结果不满足条件,循环结束
			do while 循环:除了第一次之外 每次循环都要判断,满足继续循环,不满足循环结束
	*/
	
	
	
	
	
	
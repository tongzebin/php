<?php
	/*循环10行10列*/
	for($j=1;$j<=10;$j++){
		for($i=1;$i<=10;$i++){
			echo ' * ';
		}
		echo '<hr/>';
	}
	echo "<hr/>";
	
	//循环一个三角形
	for($j=1;$j<=8;$j++){
		for($i=1;$i<=$j;$i++){
			echo ' * ';
		}
		echo "<br/>";
	}
	
	//循环出九九乘法表
	for($j=1;$j<=9;$j++){
		for($i=1;$i<=$j;$i++){
			echo $i.'X'.$j.'='.$j*$i;
		}
		echo '<br/>';
	}
	echo '<hr/>';
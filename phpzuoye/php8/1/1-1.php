<?php
	/*
		系统中功能	mt_rand()	功能:得到更好的随机数
		mt_rand(参数1,参数2)
			参数1:开始的数值
			参数2:结束的数值
			返回值(就是这个系统功能给你返回的结果)
				起始数到终止数的随机数
		
	*/
	//echo mt_rand(1,100)
	echo '<table border="1" width="800">';
	for($i=1;$i<=9;$i++){
		echo '<tr>';
			for($j=1;$j<=9;$j++){
				/*
					rgb表示颜色的方式:background:rgb(0-255,0-255,0-255);
				*/
				echo '<td style="background:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$j.'</td>';
			}
			echo '</tr>';
	}
	echo '</table>';
	
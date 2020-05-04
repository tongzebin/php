<?php
	$arr=array('张三丰','获国家','有句话叫','yjkj',15);
	var_dump($arr);
	$qw=count($arr);
	echo $qw;
	
	for($i=0;$i<$qw;$i++){
		echo $arr[$i];
	}
	
	$ar=array(
		array('name'=>'阿达','age'=>15,'sex'=>'男'),
		array('name'=>'得分王','age'=>15,'sex'=>'女'),
		array('name'=>'按时大大','age'=>15,'sex'=>'男'),
		array('name'=>'在考虑','age'=>15,'sex'=>'男')
		);
		var_dump($ar);
		echo '<table border="1" cellpadding="10">';
		for($i=0;$i<count($ar);$i++){
			echo '<tr>';
				echo "<td>{$ar[$i]['name']}</td>";
				echo "<td>{$ar[$i]['age']}</td>";
				echo "<td>{$ar[$i]['sex']}</td>";
			echo '</tr>';
		}
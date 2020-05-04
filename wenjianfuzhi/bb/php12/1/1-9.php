<?php
	/*
		数组的循环
		数组的遍历
		
		foreach(数组 as 键=>值){
			
		}
	*/
	
	$arr=array('规划局','ghjk','你奥拉克机构包括',';个ouyvbnlcuvbnm');
	var_dump($arr);
	
	$qwe=count($arr);
	echo $qwe;
	
	for($i=0;$i<count($qwe);$i++){
		echo $arr[$i];
	}
	
	foreach($arr as $key){
		echo $key;
	}
	$arr3=array(
		array('name'=>'爱还安保','sex'=>'男','age'=>23),
		array('name'=>'爱还安保','sex'=>'男','age'=>23),
		array('name'=>'爱还安保','sex'=>'男','age'=>23),
		array('name'=>'爱还安保','sex'=>'男','age'=>23),
		array('name'=>'爱还安保','sex'=>'男','age'=>23)
	);
	
	var_dump($arr3);
	

	echo '<table border="1" cellpadding="10">';
	for($i=0;$i<count($arr3);$i++){
		echo '<tr>';
			echo "<td>{$arr3[$i]['name']}</td>";
			echo "<td>{$arr3[$i]['sex']}</td>";
			echo "<td>{$arr3[$i]['age']}</td>";
		echo '</tr>';
	}
	echo '</table>';
	
	

<?php
	$arr=array('fghj','家暴男按时间表你','规范化胫腓骨');
	var_dump($arr);
	$qw=count($arr);
	echo $qw;
	for($i=0;$i<$qw;$i++){
		echo $arr[$i];
	}
	$qwe=array(
		array('name'=>'张三','age'=>15,'sex'=>'男'),
		array('name'=>'张三','age'=>15,'sex'=>'男'),
		array('name'=>'张三','age'=>15,'sex'=>'男'),
		array('name'=>'张三','age'=>15,'sex'=>'男'),
		array('name'=>'张三','age'=>15,'sex'=>'男'),
	);
	
	echo '<table border="1" cellpadding=10>';
	for($i=0;$i<count($qwe);$i++){
		echo '<tr>';
			echo "<td>{$qwe[$i]['name']}</td>";
			echo "<td>{$qwe[$i]['sex']}</td>";
			echo "<td>{$qwe[$i]['age']}</td>";
		echo '</tr>';
	}
	echo '<table border="1" cellpadding="10">';
	foreach($qwe as $v){
		echo '<tr>';
			foreach($v as $value){
				echo "<td>{$value}</td>";
			}
		echo '/<tr>';
	}
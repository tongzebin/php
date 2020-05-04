<?php
	$wj=rtrim(file_get_contents('./ly.txt'),'@');
	var_dump($wj);
	if($wj){
		$arr1=explode('@',$wj);
		echo '<table border="1" cellpadding="5">';
		echo '<tr><td>标题</td><td>姓名</td><td>内容</td><td>ip</td><td>时间</td><td>操作</td></tr>';
		foreach($arr1 as $k=>$v){
			$arr2=explode('#',$v);
			//var_dump($arr2);
			echo '<tr>';
			for($i=0;$i<count($arr2);$i++){
				echo "<td>{$arr2[$i]}</td>";
			}
			echo "<td><a href=\"del.php?jian={$k}\">删除</a></td>";
			echo '<tr/>';
			
		}
	}
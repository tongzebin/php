<?php
	$wj=rtrim(file_get_contents('./ly.db'),'@@');
	if($wj){
		$arr1=explode('@@',$wj);
		//var_dump($arr1);
		echo '<table border="1" cellpadding="5">';
		echo '<tr><td>标题</td><td>姓名</td><td>内容</td><td>ip</td><td>时间</td><td colspan="2"操作</td></tr>';
		foreach($arr1 as $k=>$v){
			$arr2=explode("##",$v);
			echo '<tr>';
			foreach($arr2 as $v2){
				echo "<td>{$v2}</td>";
			}
			echo "<td><a href=\"./del.php?del={$k}\">删除</a></td>";
			echo "<td><a href=\"./revise.php?rev={$k}\">修改</a></td>";
			echo '<tr/>';
		}
	}else{
		echo '暂无留言';
		include('./menu.php');
	}
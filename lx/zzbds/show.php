<?php
	
	$wj=rtrim(file_get_contents('./sjk.txt'),'@');
	if($wj){
		$arr1=explode('@',$wj);
		//var_dump($arr1);
		echo '<table border="1" cellpadding="5">';
		echo '<tr align="center"><td>用户名</td><td>账号</td><td>密码</td><td colspan="2">操作</td></tr>';
		foreach($arr1 as $k=>$v){
			$arr2=explode("#",$v);
			echo '<tr>';
			foreach($arr2 as $v2){
				echo "<td>{$v2}</td>";
			}
			echo "<td><a href=\"./del.php?del={$k}\">删除</a></td>";
			echo "<td><a href=\"./revise.php?rev={$k}\">修改</a></td>";
			echo '<tr/>';
		}
	}else{
		echo "暂无用户注册,网站快黄了<a href='index.php'>去前台</a>";
		
	}
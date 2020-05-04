<?php
	$q='<ul>
		<li><a href="http://www.baidu.com">百度</a></li>
		<li><a href="http://www.taobao.com">淘宝</a></li>
		<li><a href="http://www.qq.com">腾讯</a></li>
		<li><a href="http://www.163.com">网易</a></li>
	</ul>';
	
	$p="/<a href=\"(.*)\">(.*)<\/a>/";
	echo preg_match_all($p,$q,$arr);
	//var_dump($arr);
	echo '<table border="1" cellpadding="5">';
	echo '<tr>
		<th>链接</th>
		<th>网址</th>
		<th>网站名称</th>
	</tr>';
	foreach($arr[0] as $k=>$v){
		echo "<tr>";
			echo "<td>{$arr[0][$k]}</td>";
			echo "<td>{$arr[1][$k]}</td>";
			echo "<td>{$arr[2][$k]}</td>";
		echo "</tr>";
	}
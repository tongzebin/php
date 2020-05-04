<?php
	$s='<ul>
		<li><a href="http://www.baidu.com">百度</a></li>
		<li><a href="http://www.tianmao.com">天猫</a></li>
		<li><a href="http://www.taobao.com">淘宝</a></li>
		<li><a href="http://www.163.com">网易</a></li>
		<li><a href="http://www.qq.com">腾讯</a></li>
	</ul>';
	
	$zz="/<a href=\"(.*)\">(.*)<\/a>/";
	echo preg_match_all($zz,$s,$a);
	//var_dump($a);
	
	echo '<table border="1" cellpadding="5">';
	echo "<tr>
		<th>链接</th>
		<th>网址</th>
		<th>网站名</th>
	</tr>";
	foreach($a[0] as $k=>$v){
		echo "<tr>
		
			<td>{$a[0][$k]}</td>
			<td>{$a[1][$k]}</td>
			<td>{$a[2][$k]}</td>
			
		</tr>";
	}
	
	
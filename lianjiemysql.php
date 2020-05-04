<?php
	$lj=mysqli_connect('localhost','root','101330','lx') or die('连接失败');
	mysqli_set_charset($lj,'utf8');
	$sql='select * from aa';
	$fs=mysqli_query($lj,$sql);
	if(mysqli_num_rows($fs)){
		echo '<table border="1" cellpadding="5">';
		echo '
			<tr>
			<th>学号</th>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>爱好</th>
			<th>操作</th>
			</tr>
		';
		$arr=array('m'=>'男','w'=>'女');
		while($q=mysqli_fetch_assoc($fs)){
			echo '<tr align="center">';
			echo '<td>'.$q['xh'].'</td>';
			echo '<td>'.$q['name'].'</td>';
			echo '<td>'.$arr[$q['sex']].'</td>';
			echo '<td>'.$q['age'].'</td>';
			echo '<td>'.$q['hobby'].'</td>';
			echo '<td>删除</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	mysqli_free_result($fs);
	mysqli_close($lj);
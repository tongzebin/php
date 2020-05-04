<?php
	//连接
	$lj=mysqli_connect('localhost','root','101330','lx') or die('连接失败');
	//设置字符集
	mysqli_set_charset($lj,'utf8');
	//定义语句
	$sql1="insert into aa values(null,'氨基酸',18,'w','萨科就')";
	// for($i=1;$i<=1000;$i++){
	// 	mysqli_query($lj,$sql1);
	// }
	mysqli_query($lj,"delete from aa where name='氨基酸'");
	$sql='select * from aa';
	//发送并执行sql语句
	$fs=mysqli_query($lj,$sql);
	//判断数据库中是否有数据
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
		$ww=mysqli_num_rows($fs);
		echo $ww;
		for($i=1;$i<=mysqli_num_rows($fs);$i++){
			//解析
			$q=mysqli_fetch_assoc($fs);
			echo '<tr align="center">';
			//判断性别
			if($q['sex']=='w'){
				$q['sex']='女';
			}else{
				$q['sex']='男';
			}
			//数组遍历
			foreach($q as $k=>$v){
			echo '<td>'.$q[$k].'</td>';
			}
			echo '<td>删除</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	mysqli_free_result($fs);
	mysqli_close($lj);
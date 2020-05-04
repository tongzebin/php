<!DOCTYPE html>
<html>
<head>
	<title>显示</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<?php include('menu.php');
		$link=mysqli_connect('localhost','root','','sjk') or die('数据库连接失败');
		mysqli_set_charset($link,'utf8');
		$sql='select * from lamp';
		$res=mysqli_query($link,$sql);
		echo '<table width="700" border="1">';
			echo "<tr> ";
				echo '<th>序号</th> ';
				echo '<th>姓名</th> ';
				echo '<th>年龄</th> ';
				echo '<th>性别</th> ';
				echo '<th>爱好</th> ';
				echo '<th>操作</th> ';
			echo "</tr> ";
			if(mysqli_num_rows($res)>0){
		$sex = ['w'=>'女','m'=>'男'];
		// 解析遍历
		while($row = mysqli_fetch_assoc($res)){

			echo '<tr align="center" >';
				echo '<td>'.$row['id'].'</td>';
				echo '<td>'.$row['username'].'</td>';
				echo '<td>'.$row['age'].'</td>';
				echo '<td>'.$sex[$row['sex']].'</td>';
				echo '<td>'.$row['hobby'].'</td>';
				echo '<td><a href="del.php">删除</a>|<a href="update.php">修改</a></td>';
			echo '</tr>';
		}
		

	}else{
		echo '<tr align="center">';
			echo '<td colspan="6">当前查询无数据!</td>';
		echo '</tr>';
	}

		echo "</table>";
		mysqli_free_result($res);
mysqli_close($link);
		 ?>
	</center>
</body>
</html>
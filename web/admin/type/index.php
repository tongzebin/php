<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<table align="center" border="1" cellpadding="5">
		<tr>
			<th>编号</th>
			<th>名字</th>
			<th>父id</th>
			<th>路径</th>
			<th>操作</th>
		</tr>
		<?php
			$link=mysqli_connect('127.0.0.1','root','101330','tzb') or die("数据库连接失败");
			mysqli_set_charset($link,'utf8');
			$sql="select * from sp";
			$res=mysqli_query($link,$sql);
			while($row=mysqli_fetch_assoc($res)){
				echo "<tr>";
				echo  "<td>{$row['id']}</td>";
				echo  "<td>{$row['name']}</td>";
				echo  "<td>{$row['pid']}</td>";
				echo  "<td>{$row['path']}</td>";
				echo  "<td>
					<a href='add.php?id={$row['id']}&path={$row['path']}&name={$row['name']}'>添加子类别</a>
					<a href='action.php?id={$row['id']}&a=del&path={$row['path']}'>删除</a>
				</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>
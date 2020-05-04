<!DOCTYPE html>
<html>
<head>
	<title>添加</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<?php include('menu.php');
		$id=$_GET['id'];
		$link=mysqli_connect('localhost'.'root','','sjk')or die('数据库连接失败');
		mysqli_set_charset($link,'utf8');
		$sql = 'select * from lamp where id='.$id;
		$res = mysqli_query($link,$sql);
		$row = mysqli_fetch_assoc($res);
		?>
		<form action="doupdate.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row['id']?>">
			<table border="0" width="300">
				<tr>
				<td align="right">姓名:</td>
				<td><input type="text" name="user" value="<?php echo $row['username'] ?>"></td>
			</tr>
			<tr>
				<td align="right">年龄:</td>
				<td><input type="text" name="age" value="<?php echo $row['age'] ?>"></td>
			</tr>
			<tr>
				<td align="right">性别:</td>
				<td>
					<input type="radio" name="sex" value="w" <?php echo $row['sex']=='w'? 'checked':'';?> >女
					<input type="radio" name="sex" value="m" <?php echo $row['sex']=='m'? 'checked':'';?> >男
				</td>
			</tr>
			<tr>
				<td align="right">爱好:</td>
				<td>
					<textarea name="hobby"  cols="30" rows="5"><?php echo $row['hobby'] ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="修改">
					<input type="reset" value="重置">
				</td>
				
			</tr>
			</table>
		</form>
	</center>
</body>
</html>
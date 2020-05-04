<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加留言</title>
</head>
<body>
	<center>
		<?php include("./menu.php"); ?>
		<form action="doAdd.php" method="post" >
			<table border='1' cellspacing="0" border="1">
				<tr>
					<td>标题</td>
					<td><input type="text" name='title'/></td>
				</tr>
				<tr>
					<td>作者</td>
					<td><input type="text" name='author'/></td>
				</tr>
				<tr>
					<td>内容</td>
					<td>
						<textarea name="content" cols="30" rows="10"></textarea>
					</td>
				</tr>
				<tr>
					<td align='center' colspan='2'>
						<input type="submit" value='留言'/> |
						<input type="reset"/>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>

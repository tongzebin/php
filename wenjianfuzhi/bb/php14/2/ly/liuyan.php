<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="add.php" method="get">
		<table border="1">
			<caption><?php include './menu.php' ;?></caption>
			<tr>
				<td>标题</td>
				<td><input  type="text" name="bt"></td>
			</tr>
			<tr>
				<td>姓名</td>
				<td><input type="text" name="name"></td>
			<tr>
			<tr>
				<td>内容</td>
				<td><textarea name="content"></textarea></td>
			</tr>
			<tr align="content">
				<td colspan="2"><input type="submit" value="留言"></td>
			</tr>
		</table>
	</form>
</body>
</html>
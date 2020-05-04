<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#hz{
			width:250px;
			margin:0px auto;
			
		}
		
	</style>
</head>
<body>
	
	<div id="hz">
		<form action="add.php" method="get">
			<table border="1">
				<caption><?php include './menu.php' ?></caption>
				<tr>
					<td>标题</td>
					<td><input type="text" name="bt"></td>
				</tr>
				<tr>
					<td>姓名</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>内容</td>
					<td><textarea name="content" colspan='2'></textarea></td>
				</tr>
				<tr colspan="2" align="center">
					<td ><input type="submit" value="留言"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
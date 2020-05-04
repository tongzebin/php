<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="action.php" method="post"><br/>
		账号:<input type="text" name="user"/><br/>
		密码:<input type="password" name="pwd"/><br/>
		确认密码:<input type="password" name="qrpwd"/><br/>
		<input type="hidden" value="1" name="pd"/>
		<input type="submit" value="登录"/>
		<a href="zhuce.php">注册</a>
	</form>
	<?php
		if($_GET){
			switch ($_GET['error']){
				case '0':
						echo "<font color='red' size='3'>用户名不合法</font>";
					break;
				case '1':
						echo "<font color='red' size='3'>用户名不正确</font>";
					break;
				case '2':
						echo "<font color='red' size='3'>输入密码格式不正确</font>";
					break;
				case '3':
						echo "<font color='red' size='3'>密码不正确</font>";
					break;
				case '4':
						echo "<font color='red' size='3'>输入密码不一致</font>";
					break;
				default:
					break;
			}
		}
	?>
</body>
</html>
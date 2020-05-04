<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action="" method="">
			<input type="text" name="user"/>
			<input type="submit"/>
		
		</form>
		<a href="action.php?a=del">删除</a>
		<a href="action.php?a=edit">修改</a>
		<a href="action.php?a=add">添加</a>
	</body>
</html>
<?php
	$w=2;
	switch($w){
		case 1:
			echo '周一';
			break;
		case 2:
			echo '周二';
			break;
		case 3:
			echo '周三';
			break;
		case 4:
			echo '周四';
			break;
		case 5:
			echo  '周五';
			break;
		case 6:
			echo '周六';
			break;
		case 7:
			echo '周日';
			break;
	}
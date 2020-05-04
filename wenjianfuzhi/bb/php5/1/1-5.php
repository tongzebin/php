<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action="" method="get">
			<input type="text" name="user"/>
			<input type="submit"/>
		</form>
		<hr/>
		<a href="action.php?a=del">删除</a>
		<a href="action.php?a=edit">修改</a>
		<a href="action.php?a=add">添加</a>
	</body>
</html>
<?php
	/*
		多分支中的 swidch case
			语法格式
				switch(值){
					case 值一:
						如果是值1.执行
						break;
					case 值2
						值2.执行
						break;
					case 值3
						3.执行
						break;
					case 值4
					default:
						前边的不满足输出这里代码
				}
				
				
				
	*/
	
	
	
	
	
	
	
	
	
	$a=3;
	switch($a){
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
			echo '周五';
			break;
		case 6:
			echo '周六';
			break;
		case 7:
			echo '周日';
			break;
		
	}
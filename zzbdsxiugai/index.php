<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<form action="update.php" method="post">
			<table border="">
				<?php
					//1.把dbconfig.php文件中的数据读取出来
					$info=file_get_contents("./dbconfig.php");
					
					//2.使用全局匹配的方式把define('值','值')匹配出来
					//preg_match_all("/define\(\"(.*?)\",\"(.*?)\"\)/",$info,$arr);
					preg_match_all("/define\(\"(.*?)\",\"(.*?)\"\)/",$info,$arr);

					// var_dump($arr);
					// die();
					//3.循环遍历
					foreach($arr[1] as $k=>$v){
						//var_dump($v);
						echo "<tr>";
						echo "<td>{$v}</td>";
						echo "<td><input type='text' name=\"{$v}\" value=\"{$arr[2][$k]}\"></td>";
						echo "</tr>";
					}

				?> 
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="修改"/>
					</td>
				</tr>
			</table> 
		</form>
		
	</center>
</body>
</html>
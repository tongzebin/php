<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
		<tr>
			<td>文件名</td>
			<td>类型</td>
			<td>大小</td>
			<td>创建时间</td>
		</tr>
		<?php
			date_default_timezone_set('PRC');
			$q="./aa";
			$qq=opendir($q);
			while(false!==$w=readdir($qq)){
				if($w=='.'||$w=='..'){
					continue;
				}
				$qqq=rtrim($q,'/').'/'.$w;
				echo "<tr>";
				echo "<td>{$w}</td>";
				echo "<td>".filetype($qqq)."</td>";
				echo "<td>".filesize($qqq)."</td>";
				echo "<td>".date("Y-m-d H:i:s",filectime($qqq))."</td>";
				echo "</tr>";
				
			}
			closedir($qq);
			
		?>
	</table>
</body>
</html>
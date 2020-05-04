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
			<th>文件名</th>
			<th>类型</th>
			<th>大小</th>
			<th>创建时间</th>
		</tr>
		<?php
			date_default_timezone_set('PRC');
			$dir="./aa";
			$dd=opendir($dir);
			while(false!==$f=readdir($dd)){
				if($f=="."||$f==".."){
					continue;
				}
				echo "<tr>";
				echo "<td>{$f}</td>";
			$file=rtrim($dir,'/')."/".$f;
			echo "<td>".filetype($file)."</td>";
			echo "<td>".filesize($file)."</td>";
			echo "<td>".date("Y-m-d H:y:s",filectime($file))."</td>";
			}
			closedir($dd);
		?>
	</table>
</body>
</html>
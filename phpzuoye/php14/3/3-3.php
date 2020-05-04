<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="3-3.php" method="get">
		<select name="y">
			<?php
				for($y=1970;$y<=2030;$y++){
					echo "<option value='$y'>{$y}</option>";
				}
			?>
		</select>
		<select name="m">
			<?php
				for($m=1;$m<=12;$m++){
					echo "<option value='$m'>{$m}</option>";
				}
			?>
		</select>
		<select name="d">
			<?php
				for($d=1;$d<=31;$d++){
					echo "<option value='$d'>{$d}</option>";
				}
			?>
		</select>
		<input type="submit" value="提交">
	</form>
	
	</body>
</html>

<?php
	if($_GET){
		$y=$_GET['y'];
		//var_dump($y);
		$q=date('Y');
		$age=$q-$y;
		echo '您的年龄为'.$age.'岁';
	}
?>
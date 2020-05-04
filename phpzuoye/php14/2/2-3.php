<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="2-3.php" method='get'>
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
		<input type="submit" value="提交">
	</select>
	</form>
	
</body>
</html>



<?php
	if($_GET){
		$y=$_GET['y'];
		$year=date('Y');
		$age=$year-$y;
		echo '年龄为'.$age.'岁';
	}
?>














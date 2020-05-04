<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="2.php" method="get" >
		<select name="nian" >
			<?php
				for($nian=1970;$nian<=2040;$nian++){
					echo "<option value='$nian'>{$nian}</option>";
				}
			
			?>
		</select>
		<select name="yue" >
			<?php
				for($yue=1;$yue<=12;$yue++){
					echo "<option value='$yue'>{$yue}</option>";
				}
			
			?>
		</select>
		<select name="ri" >
			<?php
				for($ri=1;$ri<=31;$ri++){
					echo "<option value='$ri'>{$ri}</option>";
				}
			
			?>
		</select>
		<input type="submit"  value="提交">
	</form>

</body>
</html>
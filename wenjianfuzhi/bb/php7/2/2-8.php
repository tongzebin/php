<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form>
		<select>
			<?php
				for($y=1932;$y<=2390;$y++){
					echo "<option>{$y}</option>";
				}
			?>
		</select>
		<select>
			<?php
				for($m=1;$m<=12;$m++){
					echo "<option>{$m}</option>";
				}
			?>
		</select>
	</form>
</body>
</html>
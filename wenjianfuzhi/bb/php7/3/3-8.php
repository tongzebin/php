<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	年<select>
		<?php
			for($y=1999;$y<=2300;$y++){
				echo "<option>{$y}</option>";
			}
		
		?>
	</select>
	月<select>
		<?php
			for($m=1;$m<=12;$m++){
				echo "<option>{$m}</option>";
			}
		?>
	</select>
</body>
</html>
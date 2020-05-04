<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="">
		年<select>
			<?php
				for($y=1970;$y<=2130;$y++){
					echo "<option>{$y}</option>";
				}
				?>
		</select>
		月<select>
			<?php
				for($m=1;$m<=12;$m++){
					echo "<option>{$m}</optioon>";
				}
			?>
		</select>
	</form>
</body>
</html>
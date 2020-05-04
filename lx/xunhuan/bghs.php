<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		echo "<table  border=1 cellspacing='0'><tr>";
				$a=0;
				$c='<td width="50" height="50"></td>';
				$b=0;
				while($a<634){
					if($a%12==0){
						$b++;
						$bgc=$b%2==0?'red':'blue';
						echo "<tr bgcolor={$bgc}>";
					}
					echo $c;
					$a++;
					if($a%12==0){
						echo "</tr>";
					}
				}
		echo "</tr></table>";
	?>
</body>
</html>
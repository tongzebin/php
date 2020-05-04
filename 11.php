<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
			<?php
			echo '<table border="1" cellspacing="0">';
			$a=0;
			$b="<td></td>";
			while($a<49){
				if($a%7==0 && $a%2==0){
					echo "<tr bgcolor=red>";
				}
				if($a%7==0 && $a%2!=0){
					echo "<tr bgcolor=green>";
				}
					$a++;
				echo $b;
				if($a%7==0){
					echo "</tr>";
				} 
			echo '</table>';
			}
			?>
		
	</body>
</html>
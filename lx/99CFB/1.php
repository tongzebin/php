<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<meta charset="utf-8/">
	<style>
		table{
			float:left;	
			
		}
		#left tr td{
			float:right;
		}
		
		#right tr td{
			float:right;
		}
	</style>
</head>
<body>
<?php
		
		//左下角
echo "<table border='1' cellpadding='10'> ";
for($a=1;$a<=9;$a++){
		echo "<tr >";
		for($b=1;$b<=$a;$b++){
			echo "<td>".$b.'X'.$a.'='.$a*$b."</td>";
		}
		echo "</tr>";
	}
	echo '</table>';
	
	
	
	
	
	
			//左上角
echo "<table border=1 cellpadding=10> ";
for($a=9;$a>=1;$a--){
		echo "<tr >";
		for($b=1;$b<=$a;$b++){
			echo "<td>".$b.'X'.$a.'='.$a*$b."</td>";
		}
		echo "</tr>";
	}	
	echo '</table>';
	
	
	
	
	
	
		//右下角
		echo "<table border=1 cellpadding=10> ";
		for($a=1;$a<=9;$a++){
			echo "<tr >";
			for($i=1;$i<=9-$a;$i++){
					echo '<td></td>';
				}
			for($b=$a;$b>=1;$b--){
				echo "<td>".$b.'X'.$a.'='.$a*$b."</td>";
			}
			echo "</tr>";
		}	
	echo '</table>';
	
	
	

	
	
			//右上角
	echo "<table border=1 cellpadding=10> ";
	for($a=9;$a>=1;$a--){
		echo "<tr >";
		for($i=1;$i<=9-$a;$i++){
			echo '<td></td>';
		}
		for($b=$a;$b>=1;$b--){
			echo "<td>".$b.'X'.$a.'='.$a*$b."</td>";
		}
		echo "</tr>";
	}
	echo '</table>';
	
	
	
	//飘
	echo '<div id="left">';
	echo "<table border=1 cellpadding=10> ";
	
	for($a=1;$a<=9;$a++){
		$bgc=$a%2==0?'red':'blue';
		echo "<tr >";
		for($b=1;$b<=$a;$b++){
			echo "<td>".$b.'X'.$a.'='.$a*$b."</td>";
		}
		echo "</tr>";
	}
	
	echo '</table>';
	echo '</div>';
	
	
	//飘
	echo '<div id="right">';
	echo "<table border=1 cellpadding=10> ";
	for($a=9;$a>=1;$a--){
		$bgc=$a%2==0?'red':'blue';
		echo "<tr >";
		for($b=1;$b<=$a;$b++){
			echo "<td>".$b.'X'.$a.'='.$a*$b."</td>";
		}
		echo "</tr>";
	}	
	echo '</table>';
	echo '</div>';
	
	
	?>

</body>
</html>
	
	

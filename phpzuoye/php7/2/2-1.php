<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="2-1.php" method="get">
		数值1:<input type="text" size="5" name="num1"/>
		<input type="radio" checked name="ysf" value="jia"/>+
		<input type="radio"  name="ysf" value="jian"/>-
		<input type="radio"  name="ysf" value="cheng"/>*
		<input type="radio"  name="ysf" value="chu"/>/
		数值2:<input type="text" size="5" name="num2"/>
		<input type="submit" value="="/>
	</form>
</body>
</html>
<?php
	$num1=isset($_GET['num1'])?$_GET['num1']:0;
	$ysf=isset($_GET['ysf'])?$_GET['ysf']:'jia';
	$num2=isset($_GET['num2'])?$_GET['num2']:0;
	switch($ysf){
		case 'jia':
			 $res=$num1+$num2;
			break;
		case 'jian':
			 $res=$num1-$num2;
			break;
		case 'cheng':
			 $res=$num1*$num2;
			break;
		case 'chu':
			if($num2==0){
				echo '???????';
			}else{
				$res=$num1/$num2;
			}
			break;
	}
		echo $num1.$ysf.$num2.'='.$res;
	?>
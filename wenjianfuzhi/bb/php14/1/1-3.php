<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	<form action="1-3.php" method="get">
		<select name="year">
			<?php
				for($year=1970;$year<=2040;$year++){
					echo "<option value='$year'>{$year}</option>";
				}
			?>
		</select>
		<select name="month">
			<?php
				for($month=1;$month<=12;$month++){
					echo "<option value='$month'>{$month}</option>";
				}
			?>
		<select>
		<select name="day">
			<?php
				for($day=1;$day<=31;$day++){
					echo "<option value='$day'>{$day}</option>";
				}
			?>
		</select>
		<input type="submit" value="提交">
	</form>
</body>
</html>

<?php
	if($_GET){
		$y=$_GET['year'];
		$y=$_GET['year'];
		$m=$_GET['month'];
		$d=$_GET['day'];
		$ageUnix=mktime(0,0,0,$m,$d,$y);
		$time=time();
		$agetime=$time-$ageUnix;
		$age=floor($agetime/(60*60*24*365));
		echo '你的年龄是'.$age;
	}
?>
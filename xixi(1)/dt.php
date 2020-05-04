<?php
	include './da.php';
	echo "<form action='pd.php';method='get'>";
	echo '<table width="1000">';
	$n=$_GET['shuliang'];
	file_put_contents('sl.php',$n);
	$kong = '';
		for($i=0;$i<$n;$i++){
			$ti = $arr[array_rand($arr)];

			echo "<tr><td width='500'>";
			echo $ti;
			echo "</td><td>";
			echo "<input type='text' name='$i'/>";
			echo "</td></tr>";
			$kong .= $ti.'##';
		}
		$kong = rtrim($kong,'##');
		file_put_contents('tm.db',($kong/*.'@@'*/));
	echo '<td><input type="submit"/></td></table>';
	echo "</form>";
?>

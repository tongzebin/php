<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查看留言</title>
</head>
<body>
	<center>
		<?php include("./menu.php"); ?>

<?php  
$str=file_get_contents('./ly.db');
// var_dump($str);
$arr=rtrim($str,'@@');
$arr=explode('@@',$arr);
// var_dump($arr);
// $arr2=explode('##',$arr[0]);
// var_dump($arr2);
echo "<table border='1' width='1000' cellspacing='0' cellpadding='10' align='center'>";
	echo "<tr align='center'>";
		echo "<td>标题</td>";
		echo "<td>作者</td>";
		echo "<td>内容</td>";
		echo "<td>ip</td>";
		echo "<td width='100'>时间</td>";
		echo "<td width='100'>操作</td>";
	echo "</tr>";
foreach($arr as $k=>$v){
	$arr2=explode('##',$v);
		echo "<tr align='center'>";
		foreach($arr2 as $value){
			echo "<td>{$value}</td>";
		}
		echo "<td><a href=\"doDel.php?del={$k}\">删除</a> | <a href=\"rev.php?xiugai={$k}\">修改</a></td>";
		echo "</tr>";
}
echo "</table>";
?>
	</center>
</body>
</html>

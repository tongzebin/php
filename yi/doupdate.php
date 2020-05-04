<?php
	$user = $_POST['user'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$hobby = $_POST['hobby'];
	$id=$_POST['id'];
	$link = mysql_connect('localhost','root','','sjk') or die('连接失败');
	mysqli_set_charset($link,'utf8');
	$sql="update lamp set username='{$user}',age{$age},sex='${sex}',hobby='{$hobby}' where id=".$id;
	mysql_query($link,$sql);
	if (mysqli_affected_rows($link)>0) {
	echo "<script>alert('修改成功!');location='select.php';</script>";
}else{
	echo "<script>alert('修改失败!');location='select.php';</script>";
}
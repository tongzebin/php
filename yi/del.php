<?php
	$id = $_GET['id'];
	echo $id;
	$link = mysqli_connect('localhost','root','','sjk')or die('数据库连接失败');
	mysqli_set_charset($link,'utf8');
	$sql='delete from lamp where id='.$id;
	mysqli_query($link,$sql);
	if(mysqli_affected_rows($link)>0){
	echo "<script>alert('删除成功!');location='select.php';</script>";
}else{
	echo "<script>alert('删除失败!');location='select.php';</script>";
}	
<?php
	$user=$_POST['user'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$hobby=$_POST['hobby'];
	//var_dump($_POST);
	$link=mysqli_connect('localhost','root','','sjk') or die('数据库连接失败');
	mysqli_set_charset($link,'utf8');
	$sql="insert into lamp values (null,'{$user}',{$age},'{$sex}','{$hobby}')";
	mysqli_query($link,$sql);
	if (mysqli_insert_id($link)>0) {
		echo "<script>alert('添加成功');location='select.php';</script>";
	}else{
		echo "<script>alert('添加失败');location='insert.php';</script>";
	}
<?php
	$link=mysqli_connect('127.0.0.1','root','101330','tzb') or die("数据库连接失败");
	mysqli_set_charset($link,"utf8");
	@$name=$_POST['name'];
	@$pid=$_POST['pid'];
	@$path=$_POST['path'];
	switch($_GET['a']){
		case 'add':
			$sql="insert into sp values(null,'{$name}',{$pid},'{$path}')";
			mysqli_query($link,$sql);
			if(mysqli_insert_id($link)>0){
				echo "添加成功";
			}else{
				echo "添加失败";
			}
			break;
		case 'del':
			$id=$_GET['id'];
			function del($id,$path){
				//连接数据库
				$link=mysqli_connect('127.0.0.1','root','101330','tzb') or die("数据库连接失败");
				mysqli_set_charset($link,"utf8");
				$sql="select * from sp where path like '{$path}{$id}%'";
				$fs=mysqli_query($link,$sql);
				while($q=mysqli_fetch_assoc($fs)){
					$sql="delete from sp where id={$q['id']}";
					mysqli_query($link,$sql);
				}
				$sql="delete from sp where id={$id}";
				mysqli_query($link,$sql);
			}
			//调用函数
			$path=$_GET['path'];
			echo del($id,$path);
		}
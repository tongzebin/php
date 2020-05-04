<?php
	$lj=mysqli_connect('localhost','root','101330','tzb') or die('连接失败');
	mysqli_set_charset($lj,'utf8');
	$sql='select * from lx';
	$fs=mysqli_query($lj,$sql);
	if(mysqli_num_rows($fs)){
		while($q=mysqli_fetch_assoc($fs)){
			var_dump($q);
		}
	}
	mysqli_free_result($fs);
	mysqli_close($lj);
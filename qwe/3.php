<?php
	$lj=mysqli_connect('localhost','root','101330','lx');
	mysqli_set_charset($lj,'utf8');
	$sql='select * from aa';
	$fs=mysqli_query($lj,$sql);
	$q=mysqli_fetch_assoc($fs);
	var_dump($q);
	
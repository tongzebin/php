<?php
	//执行下载
	$name=$_GET['name'];
	header("content-Disposition:attachment;filename={$name}");
	$path="./download/".$name;
	readfile($path);
<?php
	$q="./1.txt";
	var_dump(is_dir($q));
	var_dump(is_readable($q));
	var_dump(is_writable($q));
	var_dump(is_executable($q));
	var_dump($w=touch('./qwe.txt'));
	var_dump(file_exists('./qwe.txt'));
	if(file_exists('./qwe.txt')){
		unlink('./qwe.txt');
	}else{
		echo '不存在';
	}
	var_dump($size=filesize('./q.txt'));
	var_dump($res=is_file("./aa"));
	
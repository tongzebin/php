<?php
	/*
		basename()获取路径中的文件名部分
			a/b/c/d/e/3.jpg
		dirname()返回目录中的路径部分
		pathinfo()	返回数组,数组中的值是目录中的各个部分
	*/
	$q="./aa/bb/1.txt";
	echo '当前目录中的文件名部分是'.basename($q);
	echo '<br>';
	echo '当前目录中的文件名部分是'.dirname($q);
	
	$qwe=pathinfo($q);
	var_dump($qwe);
	echo '<hr>';
	echo "当前路径中的目录部分".$qwe['dirname']."<br>";
	echo "当前路径中的文件名部分".$qwe['basename']."<br>";
	echo "当前路径中的后缀名部分".$qwe['extension']."<br>";
	echo "当前路径中不含文件后缀名的文件名".$qwe['filename']."<br>";
	echo "<hr>";
	echo "当前路径中的目录部分".pathinfo($q,PATHINFO_DIRNAME).'<br>';
	echo "当前路径中的目录部分".pathinfo($q,PATHINFO_BASENAME).'<br>';
	echo "当前路径中的目录部分".pathinfo($q,PATHINFO_EXTENSION).'<br>';
	echo "当前路径中的目录部分".pathinfo($q,PATHINFO_FILENAME).'<br>';
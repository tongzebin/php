<?php
	$q="./aa/bb/wangyun.txt";
	echo "当前目录中的文件名部分".basename($q);
	echo "当前目录中的路径部分".dirname($q);
	
	$a=pathinfo($q);
	echo '当前路径中的目录部分'.$a['dirname']."<br>";
	echo '当前路径中的文件名部分'.$a['basename']."<br>";
	echo '当前路径中的后缀名部分'.$a['extension']."<br>";
	echo '当前路径中的不含后缀名的文件部分'.$a['filename']."<br>";
	echo '当前路径中的后缀名的部分'.pathinfo($q,PATHINFO_EXTENSION)."<br>";
	echo '当前路径中的文件名的部分'.pathinfo($q,PATHINFO_DIRNAME)."<br>";
	echo '当前路径中的目录的部分'.pathinfo($q,PATHINFO_BASENAME)."<br>";
	echo '当前路径中的不含后缀名的部分'.pathinfo($q,PATHINFO_FILENAME)."<br>";
	
	
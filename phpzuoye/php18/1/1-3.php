<?php
	date_default_timezone_set('PRC');
	$dir="./aa";
	$dd=opendir($dir);
	var_dump($dd);
	while(false!==$f=readdir($dd)){
		echo $f."<br>";
	}
	closedir($dd);
	//文件创建的时间
	var_dump(date("Y-m-d H:i:s",filectime("./aa/a.txt")));
	//文件修改的时间
	var_dump(date("Y-m-d H:i:s",filemtime("./aa/a.txt")));
	//文件访问的时间
	var_dump(date("Y-m-d H:i:s",fileatime("./aa/a.txt")));
	var_dump(filetype('./q.txt'));
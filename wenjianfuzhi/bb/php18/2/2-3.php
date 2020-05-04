<?php
	date_default_timezone_set("PRC");
	$dir="./aa";
	var_dump($dd=opendir($dir));
	$dd=opendir($dir);
	while(false!==$f=readdir($dd)){
		echo $f;
	}
	closedir($dd);
	var_dump(date("Y-m-d H:i:s",fileatime('./q.txt')));
	var_dump(date("Y-m-d H:i:s",filectime('./q.txt')));
	var_dump(date("Y-m-d H:i:s",filemtime('./q.txt')));
	var_dump(filetype("./q.txt"));
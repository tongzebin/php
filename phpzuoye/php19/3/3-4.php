<?php
    $file=fopen("./aaa.txt",'r');
    $str='';
    while(!feof($file)){
        $str.=fread($file,2);
    }
    echo $str;